<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Get the default landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return $this->_page('1.0');
    }

    /**
     * Get the default landing page of the given version.
     *
     * @param string $version
     *
     * @return \Illuminate\View\View
     */
    public function version($version)
    {
        return $this->_page($version);
    }

    /**
     * Get the requested doc of the given version.
     *
     * @param string $version
     *
     * @return \Illuminate\View\View
     */
    public function doc($version, $doc)
    {
        return $this->_page($version, $doc);
    }
}
