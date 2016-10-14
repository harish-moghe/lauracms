<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Switch this package on/off. Usefull for testing...
      |--------------------------------------------------------------------------
     */

    'enabled' => true,
    /*
      |--------------------------------------------------------------------------
      | File path where themes will be located.
      | Can be outside default views path EG: resources/themes
      | Leave it null if you place your themes in the default views folder
      | (as defined in config\views.php)
      |--------------------------------------------------------------------------
     */
    'content_types' => [
        "post" => [
            "name" => "",
            "supports" => ["title", "excerpt", "body", "thumbnail", ""],
        ]
    ], // eg: realpath(base_path('resources/themes'))
];
