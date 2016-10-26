<?php

namespace Laura\Containers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of widgetInterface
 *
 * @author Harish
 */
interface WidgetInterface {

    //put your code here
    /**
     * get data for widget.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @return string
     */
    public function get_data();
}
