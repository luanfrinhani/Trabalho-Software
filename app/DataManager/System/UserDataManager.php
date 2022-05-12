<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\User;

class UserDataManager extends DataManager
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
