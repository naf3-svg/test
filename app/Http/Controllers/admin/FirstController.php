<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('first');
    }


    public function first(){
        $data=['nafa','ahmed'];
        $obj=new \stdClass();
        $obj->name='nafa';
        $obj->age=23;
        $obj->country='germany';

        return view('welcome',compact('data','obj'));
    }
}
