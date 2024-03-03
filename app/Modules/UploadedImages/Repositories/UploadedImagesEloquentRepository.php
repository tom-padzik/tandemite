<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Repositories;

use App\Modules\UploadedImages\Models\UploadedImages;
use App\Modules\UploadedImages\Repositories\Contracts\UploadedImagesRepository;
use Illuminate\Support\Collection;

class UploadedImagesEloquentRepository implements UploadedImagesRepository
{

    public function all(): Collection
    {
        return UploadedImages::query()->get();
    }

    public function create(
        string $name,
        string $surname,
        string $image,
    ): UploadedImages {
        $model = new UploadedImages();
        $model->name = $name;
        $model->surname = $surname;
        $model->image = $image;

        $model->save();

        return $model;
    }
}