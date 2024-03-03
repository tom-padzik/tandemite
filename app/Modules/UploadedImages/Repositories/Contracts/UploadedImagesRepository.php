<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Repositories\Contracts;

use App\Modules\UploadedImages\Models\UploadedImages;
use Illuminate\Support\Collection;

interface UploadedImagesRepository
{
    /**
     * @return Collection<UploadedImages>
     */
    public function all(): Collection;

    public function create(
        string $name,
        string $surname,
        string $image,
    ): UploadedImages;
}