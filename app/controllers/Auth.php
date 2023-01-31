<?php
class Auth extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('auth/index');
        $this->view('templates/footer');
    }

    public function register()
    {
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('auth/register');
        $this->view('templates/footer');
    }

    public function insertUser()
    {
        if ($this->model('Penumpang_model')->insertUser() > 0) {
            Flasher::setFlash('success', 'Berhasil Memasukkan Data, Silahkan Login!');
            Redirect::to('auth');
        } else {
            Flasher::setFlash('danger', 'Gagal Memasukkan Data');
            Redirect::to('auth/register');
        }
    }

    public function userValidate()
    {
        $_SESSION['kereta-and-pesawat'] = $this->model('Penumpang_model')->userValidate();
        if (isset($_SESSION['kereta-and-pesawat']['id_petugas'])) {
            if ($_SESSION['kereta-and-pesawat']['id_level'] == 1) {
                Redirect::to('petugas');
            }
            if ($_SESSION['kereta-and-pesawat']['id_level'] == 2) {
                Redirect::to('admin');
            }
        }
        if (isset($_SESSION['kereta-and-pesawat']['id_penumpang'])) {
            Redirect::to('user');
        }
    }
}
