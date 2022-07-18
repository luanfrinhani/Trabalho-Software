<?php

namespace App\Enum;

enum UserGroupTypeEnum:string
{
    case ADMIN = 'admin';
    case CLIENT = 'client';
}
