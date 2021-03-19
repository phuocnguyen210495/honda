<?php

namespace App\Models;

use App\Models\Concerns\HasUuidIdentifier;
use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OnlineMailable.
 *
 * @method static Builder|OnlineMailable newModelQuery()
 * @method static Builder|OnlineMailable newQuery()
 * @method static Builder|OnlineMailable query()
 * @mixin Eloquent
 */
class OnlineMailable extends Model
{
    use HasUuidIdentifier;

    protected $casts = [
        'content' => 'encrypted',
    ];

    public function getSignedUrl(): string
    {
        return \URL::temporarySignedRoute('view-email-online', Carbon::parse($this->expires_at), [
            'onlineMailable' => $this,
        ]);
    }
}
