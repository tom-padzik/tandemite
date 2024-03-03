<?php

declare(strict_types=1);

namespace App\Modules\Auth\Providers;

use Illuminate\Support\ServiceProvider;

use function base_path;


class AuthServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadViewsFrom(
            base_path('app/Modules/Auth/views'),
            'Auth',
        );
    }
}