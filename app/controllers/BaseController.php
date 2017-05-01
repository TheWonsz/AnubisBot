<?php

namespace App\Controllers;

use Config;
use Scara\Http\Controller;
use Session;

class BaseController extends Controller
{
    protected function _render($view, $title)
    {
        $title = ucwords(str_replace('-', ' ', $title));
        $this->with(['title' => $title])->render($view);
    }
}
