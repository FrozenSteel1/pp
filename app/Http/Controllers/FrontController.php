<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $arr=['Java','Javascript','PHP','4000'];
        return view('index',compact('arr'));
    }
}
