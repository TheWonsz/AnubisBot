<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Renders a view with a title.
     *
     * @param string $view
     * @param string $title
     *
     * @return \Illuminate\View\View
     */
    protected function _render($view, $title)
    {
        $title = ucwords(str_replace('-', ' ', $title));

        return view($view)->with('title', $title);
    }

    /**
     * Generates the doc path to feed to a view and renders it.
     *
     * @param string $version
     * @param string $doc
     *
     * @return \Illuminate\View\View
     */
    protected function _page($version, $doc = 'installation')
    {
        $dv = str_replace('.', '_', $version);
        $docPath = base_path().'/resources/views/docs/markdown/'.$dv.'/'.$doc.'.md';

        return $this->_render('docs.getdoc', $doc)->with([
            'doc'     => $docPath,
            'version' => $version,
        ]);
    }
}
