<?php

namespace App\Controllers;

class desaController extends BaseController
{
    public function nganggring(): string
    {
        return view('user/desa/nganggring');
    }
    public function kelor()
    {
        return view('user/desa/kelor');
    }
    public function gamplong()
    {
        return view('user/desa/gamplong');
    }
    public function pancoh()
    {
        return view('user/desa/pancoh');
    }
    public function kampungIklim()
    {
        return view('user/desa/kampungIklim');
    }
}
