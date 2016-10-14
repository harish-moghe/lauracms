<?php

namespace Laura\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Laura\Models\widgets as widget;

class LayoutController extends Controller {

    //
    public function create() {
        return View::make('Laura::backend.create-layout');
    }

    public function store(Request $request) {
        $widget = new widget();
        $widget->store($request);
        return redirect()->action('\/Laura\Controllers\Backend\LayoutController@edit')->with('status', 'Layout Created!');;
    }

    public function edit() {
        $layout = array();
        return View::make('Laura::backend.edit-layout')->with("layout", $layout);
    }

}
