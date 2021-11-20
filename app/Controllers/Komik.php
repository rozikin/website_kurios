<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $KomikModel;

    public function __construct()
    {
        $this->KomikModel = new KomikModel();
    }

    public function index()
    {

        $data = [
            'title'     => "Home | Kurios Utama",
            'komik'     => $this->KomikModel->getKomik()
        ];
        return view('komik/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->KomikModel->getKomik($slug)
        ];
        return view('komik/datail' . $data);
    }
}
