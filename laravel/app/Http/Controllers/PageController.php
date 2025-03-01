<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\test;

 use View;

class PageController extends Controller
{


    public function index()  {
        $test = Test::all();
         
        return view("szablon",["test"=>$test]);


    }
    
}
