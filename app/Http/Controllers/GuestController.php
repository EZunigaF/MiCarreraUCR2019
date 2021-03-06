<?php

namespace CRUN\Http\Controllers;

use Illuminate\Http\Request;
use CRUN\Test;

class GuestController extends Controller
{
    
    public function indexMain(){

        $tests = Test::all();

        return view('crun', ['tests' => $tests]);
    }

    public function show(Test $test)
    {
        return view('cruns.show', ['test' => $test]);
    }

    
}
