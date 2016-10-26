<?php

namespace Laura\Controllers\Backend;

use App\User;
use Laura\User as LauraUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use Image;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $userList = LauraUser::getAll();
        $user = \App\User::where('id', 1)->get();
        return View::make("Laura::user.index")->with("users", $userList)->with("useredit", $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $user = \App\User::where('id', 1)->get();
        return View::make("Laura::user.create")->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //

        $user_name = $request->input('name');
        $user_password = $request->input('password');
        $cnf_password = $request->input('cnf_password');
        $email_address = $request->input('email');
        $role = $request->input('role');

        $this->validate($request, [
            'name' => 'required|unique:users|max:255',
            'email' => 'Email|Unique:users',
            'password' => 'required',
            'cnf_password' => 'required',
        ]);
        $file = $request->file('image');
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
        $file_uploaded = $destinationPath . "/" . $file->getClientOriginalName();
        $img = Image::make($file_uploaded);
        $img->resize(200, 200);
        $img->save('uploads/1/' . $file->getClientOriginalName());
//        User::create([
//            'name' => $user_name,
//            'email' => $email_address,
//            'password' => bcrypt($user_password),
//        ]);
        return redirect()->action(
                        '\Laura\Controllers\Backend\UserController@index'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
