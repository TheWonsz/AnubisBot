<?php

namespace App\Classes\Markdown;

use Scara\Support\ServiceProvider;

class MarkdownServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->create('markdown', function () {
            return new Markdown();
        });
    }
}
