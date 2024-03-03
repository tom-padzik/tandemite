<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Repositories;

use App\Modules\UploadedImages\Models\UploadedImage;
use App\Modules\UploadedImages\Repositories\Contracts\UploadedImageRepository;
use Illuminate\Support\Collection;

class UploadedImageEloquentRepository implements UploadedImageRepository
{

    public function all(): Collection
    {
        return UploadedImage::query()->get();
    }

    public function create(
        string $name,
        string $surname,
        string $image,
    ): UploadedImage {
        $model = new UploadedImage();
        $model->name = $name;
        $model->surname = $surname;
        $model->image = $image;

        $model->save();

        return $model;
    }
}