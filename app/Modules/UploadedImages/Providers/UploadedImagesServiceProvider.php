<?php

declare(strict_types=1);

namespace App\Modules\UploadedImages\Providers;

use App\Modules\UploadedImages\Repositories\Contracts\UploadedImagesRepository;
use App\Modules\UploadedImages\Repositories\UploadedImagesEloquentRepository;
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
            UploadedImagesRepository::class,
            UploadedImagesEloquentRepository::class,
        );
    }


}