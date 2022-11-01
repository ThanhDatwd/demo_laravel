<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index (){
        $user= new User();
        $users=$user::all();
        $data=[
            "name"=>[1,2,3.4],
            "users"=>$users
        ];
        return view('home/index',$data);


    }
}
