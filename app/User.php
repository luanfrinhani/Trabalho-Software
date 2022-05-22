<?php

namespace App;

use App\Model\Core\File;
use App\Model\System\AvatarImage;
use App\Notifications\System\ResetPasswordNotification;
use App\Notifications\System\WelcomeUserNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string email
 * @property mixed id
 * @property string password
 * @property string name
 * @property string group
 * @property string label
 */
class User extends Authenticatable
{
    use Notifiable;

    const ADMIN = 'admin';
    const CLIENT = 'client';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'group'
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
    ];

    protected $with = [
        'avatar'
    ];

    protected $appends = [
        'label'
    ];

    public function avatar()
    {
        return $this->belongsToMany(File::class, 'avatar_images');
    }

    public function getFirstNameAttribute()
    {
        return explode(' ', $this->name)[0];
    }

    public function getLabelAttribute()
    {
        return $this->label = trans('user.label.' . $this->group);
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
