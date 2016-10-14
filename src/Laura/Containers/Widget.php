<?php

namespace Laura\Containers;

use Illuminate\Http\Response;
use App\Models\Widgets\current_user as cu;
use View;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Widget {

    var $_vew_path = "";
    var $_controller = "";
    var $output = "";

    public function __construct() {
        ;
    }

    public static function render($name) {
        $view = $name; 
        $widgetObject = new cu();
        $widget_data = $widgetObject->get_data();
        return View($view, $widget_data);
    }

}
