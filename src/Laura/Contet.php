<?php

namespace Laura;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Support\Facades\DB as DB;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Content extends Model {

    var $typeTitle = "";
    var $contentTypeId;

    public function __construct($title = "Page") {
        $title = ucfirst($title);
        $this->typeTitle = $title;
        return DB::table('content_types')->insert([
            'name' => $this->typeTitle,
            'slug' => str_slug($this->typeTitle, "-"),
            'created_date' => date("Y-m-d H:i:s"),
        ]);
    }

    public static function Add() {
//        var_dump(AppModel::getConnectionResolver());
//        die;
    }

    public static function AddFields() {
//        DB::table('content_types')->insert([
//            'name' => $this->typeTitle,
//            'slug' => str_slug($this->typeTitle, "-"),
//            'created_date' => date("Y-m-d H:i:s"),
//        ]);
    }

}
