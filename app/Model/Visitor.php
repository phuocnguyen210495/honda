<?php

namespace App\Model;

use App\Model\Concerns\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Visitor
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visitor query()
 * @mixin \Eloquent
 * @mixin IdeHelperVisitor
 */
class Visitor extends Model
{
    use HasFactory, Searchable;

    protected $casts = [
      'anonymized' => 'boolean'
    ];

    public function anonymize(): self
    {
        $this->update([
            'ip' => inet_ntop(inet_pton($this->ip) & inet_pton('255.255.255.0')),
            'ua' => 'Dummy/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0',
            'user_id' => null,
            'country_name' => 'EN',
            'region_name' => str_repeat('*', 12),
            'city_name' => str_repeat('*', 12),
            'latitude' => 0,
            'longitude' => 0,
            'anonymized' => true
        ]);


        return $this;
    }
}
