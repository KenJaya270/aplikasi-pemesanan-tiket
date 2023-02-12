<?php
class Admin extends Controller
{
    public function index()
    {
        Middleware::auth();
        $data['judul'] = 'Admin';
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('templates/footer');
    }

    public function daftarPetugas()
    {
        Middleware::auth();
        $data['judul'] = 'Daftar Petugas';
        $data['petugas'] = $this->model('Petugas_model')->getAllPetugas();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('admin/daftarPetugas', $data);
        $this->view('templates/footer');
    }

    public function daftarPenumpang()
    {
        Middleware::auth();
        $data['judul'] = 'Daftar Penumpang';
        $data['penumpang'] = $this->model('Penumpang_model')->getAllPenumpang();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('admin/daftarPenumpang', $data);
        $this->view('templates/footer');
    }

    public function daftarLevel()
    {
        Middleware::auth();
        $data['judul'] = 'Daftar Level';
        $data['level'] = $this->model('Level_model')->getAllLevel();
        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('admin/daftarLevel', $data);
        $this->view('templates/footer');
    }

    public function insertPetugas()
    {
        if ($this->model('Petugas_model')->insertPetugas() > 0) {
            Flasher::setFlash('success', 'Petugas Berhasil Ditambahkan');
            Redirect::to('admin/daftarPetugas');
        } else {
            Flasher::setFlash('danger', 'Petugas Gagal Ditambahkan');
            Redirect::to('admin/daftarPetugas');
        }
    }

    public function updatePetugas()
    {
        if ($this->model('Petugas_model')->updatePetugas() > 0) {
            Flasher::setFlash('success', 'Petugas Berhasil Diedit');
            Redirect::to('admin/daftarPetugas');
        } else {
            Flasher::setFlash('danger', 'Petugas Gagal Diedi');
            Redirect::to('admin/daftarPetugas');
        }
    }

    public function hapusPetugas($id)
    {
        if ($this->model('Petugas_model')->hapusPetugas($id)) {
            Flasher::setFlash('success', 'Petugas Berhasil Dihapus');
            Redirect::to('admin/daftarPetugas');
        } else {
            Flasher::setFlash('danger', 'Petugas Gagal Dihapus');
            Redirect::to('admin/daftarPetugas');
        }
    }

    public function insertPenumpang()
    {
        if ($this->model('Penumpang_model')->insertPenumpang()) {
            Flasher::setFlash('success', 'Penumpang Berhasil Ditambahkan');
            Redirect::to('admin/daftarPenumpang');
        } else {
            Flasher::setFlash('danger', 'Penumpang Gagal Ditambahkan');
            Redirect::to('admin/daftarPenumpang');
        }
    }

    public function updatePenumpang()
    {
        if ($this->model('Penumpang_model')->updatePenumpang() > 0) {
            Flasher::setFlash('success', 'Penumpang Berhasil Diedit');
            Redirect::to('admin/daftarPenumpang');
        } else {
            Flasher::setFlash('danger', 'Penumpang Gagal Diedit');
            Redirect::to('admin/daftarPenumpang');
        }
    }

    public function hapusPenumpang($id)
    {
        if ($this->model('Penumpang_model')->hapusPenumpang($id) > 0) {
            Flasher::setFlash('success', 'Penumpang Berhasil Dihapus');
            Redirect::to('admin/daftarPenumpang');
        } else {
            Flasher::setFlash('danger', 'Penumpang Gagal Dihapus');
            Redirect::to('admin/daftarPenumpang');
        }
    }

    public function insertLevel()
    {
        if ($this->model('Level_model')->insertLevel() > 0) {
            Flasher::setFlash('success', 'Level Berhasil Ditambahkan');
            Redirect::to('admin/daftarLevel');
        } else {
            Flasher::setFlash('danger', 'Level Gagal Ditambahkan');
            Redirect::to('admin/daftarLevel');
        }
    }

    public function updateLevel()
    {
        if ($this->model('Level_model')->editLevel() > 0) {
            Flasher::setFlash('success', 'Level Berhasil Diupdate');
            Redirect::to('admin/daftarLevel');
        } else {
            Flasher::setFlash('danger', 'Level Gagal Diedit');
            Redirect::to('admin/daftarLevel');
        }
    }

    public function hapusLevel($id)
    {
        if ($this->model('Level_model')->hapusLevel($id) > 0) {
            Flasher::setFlash('success', 'Level Berhasil Dihapus');
            Redirect::to('admin/daftarLevel');
        } else {
            Flasher::setFlash('danger', 'Level Gagal Dihapus');
            Redirect::to('admin/daftarLevel');
        }
    }
}
