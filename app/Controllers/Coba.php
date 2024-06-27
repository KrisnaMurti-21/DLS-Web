<?php

namespace App\Controllers;

use App\Models\ModelCustom;
use App\Models\ModelSiswa;
use App\Models\ModelTes;

class Coba extends BaseController
{
    public function index()
    {
        return view('siswa/profile');
    }
}
