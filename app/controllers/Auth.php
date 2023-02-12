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
        Middleware::level('user');
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('auth/register');
        $this->view('templates/footer');
    }

    public function insertUser()
    {
        if ($this->model('Penumpang_model')->insertPenumpang() > 0) {
            Flasher::setFlash('success', 'Berhasil Memasukkan Data, Silahkan Login!');
            Redirect::to('auth');
        } else {
            Flasher::setFlash('danger', 'Gagal Memasukkan Data');
            Redirect::to('auth/register');
        }
    }

    public function userValidate()
    {
        if ($this->model('Penumpang_model')->penumpangValidate()) {
            $_SESSION['kereta-and-pesawat'] = $this->model('Penumpang_model')->getPenumpang();
            Redirect::to('user');
        } else if ($this->model('Petugas_model')->petugasValidate()) {
            $_SESSION['kereta-and-pesawat'] = $this->model('Petugas_model')->getPetugas();
            if ($_SESSION['kereta-and-pesawat']['id_level'] == 2) {
                Redirect::to('admin');
            } else {
                Redirect::to('petugas');
            }
        } else {
            Flasher::setFlash('danger', 'Username atau Password salah');
            Redirect::to('');
        }
    }

    public function logout()
    {
        session_destroy();
        session_unset();
        return Functions::back();
    }
}
