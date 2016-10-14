<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Laura;

use Auth;
use App\User as LaravelUser;

Class User {

    public function __construct($id) {
        ;
    }
        
    public static function get() {
        if (Auth::user()) {
            return Auth::user()->toArray();
        }
    }

    public static function getAll() {
        $users = LaravelUser::all();
        return $users;
    }

}
