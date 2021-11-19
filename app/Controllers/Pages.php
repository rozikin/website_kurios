<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home | Kurios Utama",
            'tes'   => ['satu', 'dua', 'tiga', 'empat']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => "About | Kurios Utama"
        ];
        return view('pages/about', $data);
    }
}
