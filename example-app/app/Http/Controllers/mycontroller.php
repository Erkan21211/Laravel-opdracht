<?php

namespace App\Http\Controllers;

use listen;
use Illuminate\Http\Request;

class mycontroller extends Controller
{
    // show all data
    public function index() {
        return view('lijsten', [
            'lijsten' => listen::all()
        ]);
    }

    // show single data
    public function show() {

    }
}
