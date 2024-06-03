<?php

namespace App\Controllers;

class auth extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function loginUser()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // if ($username == 'admin') {
        //     if ($password == 'admin') {
        //         session()->set('admin', 'true');
        //         return view('user/home');
        //     } else {
        //         $data = ['error' => 'Password yang anda masukkan salah'];
        //         return view('auth/login', $data);
        //     }
        // } else {
        //     $data = ['error' => 'username yang anda masukkan salah'];
        //     return view('auth/login', $data);
        // }
        if ($username == 'admin' && $password == 'admin') {
            session()->set('role', 'admin');
            return view('admin/home');
        } elseif ($username == 'user' && $password == '12345') {
            session()->set('role', 'user');
            return view('user/home');
        } else {
            $data = ['error' => 'username atau password yang anda masukkan salah'];
            return view('auth/login', $data);
        }
    }
}
