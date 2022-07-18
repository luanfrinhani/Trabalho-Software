<?php

namespace App;

use App\Enum\UserGroupTypeEnum;
use App\Notifications\System\ResetPasswordNotification;
use App\Notifications\System\WelcomeUserNotification;
use App\Traits\Core\Uuid;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string email
 * @property string id
 * @property string password
 * @property string name
 * @property UserGroupTypeEnum group
 * @property string label
 */
class User extends Authenticatable
{
    use Notifiable, Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'group'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'group' => UserGroupTypeEnum::class,
    ];


    protected $appends = [
        'label'
    ];

    public function getFirstNameAttribute()
    {
        return explode(' ', $this->name)[0];
    }

    public function getLabelAttribute()
    {
        return $this->label = trans('user.label.' . $this->group->value);
    }

    public function isClient(User $user)
    {
        if ($user->group == UserGroupTypeEnum::CLIENT) {
            return null;
        }

        return true;
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    public function sendWelcomeUserNotificaiton($token)
    {
        $this->notify(new WelcomeUserNotification($token));
    }
}
