<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
		$doc = base_path().'/resources/views/docs/markdown/'.$dv.'/'.$doc.'.md';
    	return $this->_render('docs.getdoc', $doc)->with([
    		'doc' => $doc,
    		'version' => $version,
    	]);
	}
}
