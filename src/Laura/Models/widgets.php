<?php

namespace Laura\Models;

use Illuminate\Database\Eloquent\Model;

class widgets extends Model {

    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'laura_widgets';
    public $timestamps = false;

    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store($request) {
        // Validate the request...
        $this->name = $request->input('name');
        $this->core = ( $request->core ) ? $request->input('core') : 0;
        $this->save();
    }

}
