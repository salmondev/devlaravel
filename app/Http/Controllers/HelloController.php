<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    function showHello(){
        return '<h1>Hello Controller! : salmondev</h1>';
    }

    function title($name){
        return '<h2>Hello title! : </h2><b>'.$name.'</b>';
    }

    function resultProduct($product){
        return '<h2>Show! : </h2><b>'.$product.'</b>';
    }

    function showData(){
        return view('user')
        ->with('name','salmondev')
        ->with('title','Laravel Basic to Advance');
    }
}
