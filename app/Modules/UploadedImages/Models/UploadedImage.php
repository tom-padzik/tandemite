<?php

namespace App\Modules\UploadedImages\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int|string $id
 * @property string          $name
 * @property string          $surname
 * @property string          $image
 */
class UploadedImage extends Model
{
    protected $table = 'uploaded_images';
    public $timestamps = false;
}
