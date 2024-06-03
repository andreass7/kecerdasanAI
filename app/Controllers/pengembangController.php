<?php

namespace App\Controllers;

class pengembangController extends BaseController
{
    public function index(): string
    {
        return view('user/pengembang');
    }
}
