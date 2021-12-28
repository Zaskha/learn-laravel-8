<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        dd('tersubmit guys'); //dump, die
        // ddd('tersubmit guys'); //dump, die, debug

    }
}
