<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{

    public function index()
    {

    return view('welcome',[
        "welcome" => Home::time()
    ]);

    }


    public static function time()
    {
        $time = date("H");

        if($time < "12"){
            return "Good Morning";
        }elseif($time >= "12" && $time < "17"){
            return "Good Afternoon";
        }else return "Good Evening";
    }   
    


}