<?php

class User extends Controller
{
    public function index()
    {
        Middleware::auth();
        $data['judul'] = 'Penumpang';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('penumpang/index');
        $this->view('templates/footer');
    }
}
