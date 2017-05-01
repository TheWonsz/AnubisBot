<?php

namespace App\Controllers;

use Config;
use Scara\Http\Request;

class HomeController extends BaseController
{
    public function getIndex()
    {
        $doc = app_path().'/views/docs/markdown/1_0/installation.md';
        $this->with(['doc' => $doc, 'version' => '1.0'])->_render('docs.getdoc', 'Installation');
    }

    public function getDoc(Request $request)
    {
        if (isset($request->version)) {
            $doc = app_path().'/views/docs/markdown/'.str_replace('.', '_', $request->version).'/'.$request->doc.'.md';
            $this->with(['doc' => $doc, 'version' => $request->version])->_render('docs.getdoc', $request->doc);
        }
    }
}
