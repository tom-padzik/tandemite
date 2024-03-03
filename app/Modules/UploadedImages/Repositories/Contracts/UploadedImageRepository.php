<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Repositories\Contracts;

use App\Modules\UploadedImages\Models\UploadedImage;
use Illuminate\Support\Collection;

interface UploadedImageRepository
{
    /**
     * @return Collection<UploadedImage>
     */
    public function all(): Collection;

    public function create(
        string $name,
        string $surname,
        string $image,
    ): UploadedImage;
}