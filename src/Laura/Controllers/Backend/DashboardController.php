<?php

namespace Laura\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App\Models\test as Test;
use Laura\Containers\Widget as LauraWidget;

class DashboardController extends Controller {

    //
    public function __construct() {
        $this->middleware('auth');       
    }

    public function index() {
        return View::make("Laura::home");
//        die("fad");
    }

}
