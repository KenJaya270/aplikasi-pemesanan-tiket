<?php

class Petugas extends Controller
{
    public function index()
    {
        Middleware::auth();
        $data['judul'] = 'Petugas Index';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('petugas/index');
        $this->view('templates/footer');
    }
}
