<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        return view('trains.index');
    }

    public function show(){
        return view('trains.index');
    }
}
