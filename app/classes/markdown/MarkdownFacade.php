<?php

namespace App\Classes\Markdown;

use Scara\Support\Facades\Facade;

class MarkdownFacade extends Facade
{
    protected static function getAccessor()
    {
        return 'markdown';
    }
}
