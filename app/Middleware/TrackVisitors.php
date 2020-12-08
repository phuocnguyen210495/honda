<?php

namespace App\Middleware;

use App\Model\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Location\Facades\Location;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!app()->environment('production')) {
            $visitor = Visitor::where('ip', '44.44.44.44')
                ->where('ua', $request->userAgent())->firstOrCreate([
                    'ip' => '44.44.44.44',
                    'ua' => $request->userAgent(),
                    'visits' => 0,
                    'user_id' => Auth::id(),
                    'country_name' => 'United States',
                    'region_name' => 'Kansa',
                    'city_name' => 'San Diego',
                    'latitude' => '37.751',
                    'longitude' => '-97.822',
                    'zip_code' => 00000
                ]);
            $visitor->update(['visits' => $visitor->visits + 1]);
            return $next($request);
        }
        $location = Location::get($request->ip());
        $visitor = Visitor::where('ip', $location->ip)
            ->where('ua', $request->userAgent())->firstOrCreate([
                'ip' => $location->ip,
                'ua' => $request->userAgent(),
                'visits' => 0,
                'user_id' => Auth::id(),
                'country_name' => $location->countryName,
                'region_name' => $location->regionName,
                'city_name' => $location->cityName,
                'latitude' => $location->latitude,
                'longitude' => $location->longitude,
                'zip_code' => $location->zipCode
            ]);

        $visitor->update(['visits' => $visitor->visits + 1]);
        return $next($request);
    }
}
