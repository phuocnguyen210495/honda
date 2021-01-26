<?php

namespace App\Middleware;

use App\Model\Visitor;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Stevebauman\Location\Position;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!app()->environment('production')) {
            $visitor = Visitor::where('ip', $request->ip())
                ->where('ua', $request->userAgent())->first();

            if ($visitor === null) {
                $visitor = Visitor::create([
                    'ip'           => $request->ip(),
                    'ua'           => $request->userAgent(),
                    'visits'       => 0,
                    'user_id'      => Auth::id(),
                    'country_name' => 'United States',
                    'region_name'  => 'Kansa',
                    'city_name'    => 'San Diego',
                    'latitude'     => '37.751',
                    'longitude'    => '-97.822',
                    'zip_code'     => 00000,
                ]);
            }
        } else {
            $location = Location::get($request->ip());

            if (!$location instanceof Position) {
                return $next($request);
            }

            $visitor = Visitor::where('ip', $location->ip)
                ->where('ua', $request->userAgent())->firstOrCreate([
                    'ip'           => $location->ip,
                    'ua'           => $request->userAgent(),
                    'visits'       => 0,
                    'user_id'      => Auth::id(),
                    'country_name' => $location->countryName,
                    'region_name'  => $location->regionName,
                    'city_name'    => $location->cityName,
                    'latitude'     => $location->latitude,
                    'longitude'    => $location->longitude,
                    'zip_code'     => $location->zipCode,
                ]);
        }

        $visitor->update(['visits' => $visitor->visits + 1]);

        return $next($request);
    }
}
