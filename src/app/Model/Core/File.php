<?php

namespace App\Model\Core;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property string originalName
 * @property string mimeType
 * @property string url
 * @property string path
 * @property string size
 */
class File extends Model
{
    protected $fillable = [
        'name', 'originalName', 'mimeType', 'url', 'path', 'size',
    ];

    /**
     * @return string
     */
    public static function path(): string
    {
        return '/file';
    }
}
