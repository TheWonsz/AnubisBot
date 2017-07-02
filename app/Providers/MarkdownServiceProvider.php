<?php

namespace App\Providers;

use cebe\markdown\MarkdownExtra as Markdown;
use Illuminate\Support\ServiceProvider;

class MarkdownServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('markdown', function ($app) {
            return new Markdown();
        });
    }
}
