<?php

namespace App\Controllers;

class dashboardController extends BaseController
{
    public function index(): string
    {
        return view('user/home');
    }
}
