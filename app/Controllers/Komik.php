<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Komik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home | Kurios Utama",
            'tes'   => ['satu', 'dua', 'tiga', 'empat']
        ];
        return view('komik/index', $data);
    }
}
