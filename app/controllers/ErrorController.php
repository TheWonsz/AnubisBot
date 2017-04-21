<?php

namespace App\Controllers;

class ErrorController extends BaseController
{
    // Place methods here

    public function error404()
    {
        $this->_render('errors.404', 'Error: 404');
    }

    public function error400()
    {
        $this->_render('errors.400', 'Error: 400');
    }
}
