<?php

namespace App\Controllers;

class petunjukController extends BaseController
{
    public function index(): string
    {
        return view('user/petunjuk');
    }
}
