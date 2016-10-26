<?php

namespace Laura\Containers;

use Illuminate\Http\Response;
use App\Models\Widgets;
use App\Models\Widgets\current_user as cu;
use Illuminate\Support\Facades\View;

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
        
    }

    public static function render($name) {
        $name = str_replace('"', "", $name);
        $name = str_replace("'", "", $name);
        $class = 'App\\Models\\Widgets\\' . $name;
        $widgetObject = new $class;
        $widget_data = $widgetObject->get_data();
        $string = View::make($name, $widget_data);
        return htmlspecialchars_decode($string);
    }

}
