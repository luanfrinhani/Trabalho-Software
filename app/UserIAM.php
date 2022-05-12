<?php

namespace App;

use App\Model\Core\File;
use App\Notifications\System\WelcomeUserIAMNotification;
use App\Traits\Core\UsesUuid;
use BadMethodCallException;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

/**
 * @property string id
 * @property string name
 * @property string email
 * @property bool active
 * @property Collection avatar
 * @property string locale
 */
class UserIAM extends Model implements Authenticatable
{
    use UsesUuid;
    use Notifiable;

    protected $fillable = [
        'id', 'name', 'email', 'active', 'avatar', 'locale'
    ];

    public function getKey()
    {
        return $this->email;
    }

    public function getAuthIdentifierName()
    {
        return 'email';
    }

    public function getAuthIdentifier()
    {
        return $this->email;
    }

    public function hasRole($roles, $resource = '')
    {
        return Auth::hasRole($roles, $resource);
    }

    public function getAuthPassword()
    {
        throw new BadMethodCallException('Unexpected method [getAuthPassword] call');
    }

    public function getRememberToken()
    {
        throw new BadMethodCallException('Unexpected method [getRememberToken] call');
    }

    /**
     * @SuppressWarnings("unused")
     */
    public function setRememberToken($value)
    {
        throw new BadMethodCallException('Unexpected method [setRememberToken] call');
    }

    public function getRememberTokenName()
    {
        throw new BadMethodCallException('Unexpected method [getRememberTokenName] call');
    }

    public function getAvatarAttribute($value)
    {
        $files = [];
        if ($value) {
            $files[] = new File(['url' => $value]);
        }
        return collect($files);
    }

    public function getFirstNameAttribute()
    {
        return explode(' ', $this->name)[0];
    }

    public function sendWelcomeUserIAMNotificaiton()
    {
        $this->notify(new WelcomeUserIAMNotification());
    }
}
