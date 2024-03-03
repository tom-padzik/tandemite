<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Providers;

use App\Modules\UploadedImages\Repositories\Contracts\UploadedImageRepository;
use App\Modules\UploadedImages\Repositories\UploadedImageEloquentRepository;
use Illuminate\Support\ServiceProvider;

use function base_path;


class UploadedImagesServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadViewsFrom(
            base_path('app/Modules/UploadedImages/views'),
            'UploadedImages',
        );

        $this->app->singleton(
            UploadedImageRepository::class,
            UploadedImageEloquentRepository::class,
        );
    }


}