<?php

namespace App\Model;

use App\Model\Concerns\Searchable;
use Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use ProtoneMedia\LaravelVerifyNewEmail\MustVerifyNewEmail;

/**
 * App\Model\User.
 *
 * @property int                                                   $id
 * @property string                                                $name
 * @property string                                                $email
 * @property Carbon|null                                           $email_verified_at
 * @property string                                                $password
 * @property string|null                                           $remember_token
 * @property Carbon|null                                           $created_at
 * @property Carbon|null                                           $updated_at
 * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property int|null                                              $notifications_count
 *
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin Eloquent
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use Notifiable;
    use Searchable;
    use MustVerifyNewEmail;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification(): void
    {
        $this->newEmail($this->getEmailForVerification());
    }
}
