<?php

namespace App\DataManager\System;

use App\DataManager\Base\DataManager;
use App\Model\System\AvatarImage;

class AvatarImageDataManager extends DataManager
{
    public function __construct(AvatarImage $avatarImage)
    {
        parent::__construct($avatarImage);
    }
}
