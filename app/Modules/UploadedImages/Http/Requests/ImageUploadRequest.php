<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $surname
 */
class ImageUploadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'file' => 'required|image|max:2048',
        ];
    }
}