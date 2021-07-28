<?php

namespace TheOpenEyes\FormatApiResponse;

use Illuminate\Support\ServiceProvider;

class FormatApiResponseServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(FormatApiResponse::class, function () {
            return new FormatApiResponse();
        });
    }
}
