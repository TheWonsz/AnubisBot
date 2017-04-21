<?php

namespace App\Controllers;

use Scara\Http\Controller;
use Scara\Http\Request;

class BaseController extends Controller
{
    protected function _render($view, $title)
    {
    	$title = ucwords(str_replace('-', ' ', $title));
    	$this->with(['title' => $title])->render($view);
    }
}
