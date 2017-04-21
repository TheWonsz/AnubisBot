<?php

namespace App\Controllers;

use Scara\Http\Request;

class HomeController extends BaseController
{
    public function getIndex()
    {
        $doc = app_path().'/views/docs/markdown/helpers.md';
        $this->with(['doc' => $doc])->_render('docs.getdoc', 'Installation');
    }

    public function getDoc(Request $request)
    {
        $doc = app_path().'/views/docs/markdown/'.$request->doc.'.md';
        $this->with(['doc' => $doc])->_render('docs.getdoc', $request->doc);
    }
}
