<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(){
        return "Hello from users";
    }

    public function show($id){
        $data=array(
            "id"=>$id,
            "name"=>"LeonardReyes",
            "age"=>30,
            "email"=>"primus.reyes@gmail.com"
             );
             return view('user', $data);
    }
}
