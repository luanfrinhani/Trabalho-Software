<?php

namespace App\DataManager\Base;

use App\Model\Core\File;

class FileDataManager extends DataManager
{
    public function __construct(File $file)
    {
        parent::__construct($file);
    }
}
