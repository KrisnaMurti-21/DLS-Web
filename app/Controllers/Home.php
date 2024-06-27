<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function jenis()
    {
        return view('jenis');
    }

    public function manfaat()
    {
        return view('manfaat');
    }
    
    public function counter()
    {
        return view('counter');
    }
}
