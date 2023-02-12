<?php
class Penumpang_model
{
    private $db;
    private $penumpang = 'penumpang';
    private $petugas = 'petugas';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertPenumpang()
    {
        $query = "CALL insertPenumpang(:username, :password, :nama_penumpang, :alamat_penumpang, :tanggal_lahir, :jenis_kelamin, :telfone)";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        $this->db->bind('nama_penumpang', $_POST['nama_penumpang']);
        $this->db->bind('alamat_penumpang', $_POST['alamat_penumpang']);
        $this->db->bind('tanggal_lahir', $_POST['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $_POST['jenis_kelamin']);
        $this->db->bind('telfone', $_POST['telfone']);
        return $this->db->rowCount();
    }

    public function penumpangValidate()
    {
        $this->db->query("CALL getPenumpang(:username, :password)");
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        return $this->db->rowCount();
    }

    public function getPenumpang()
    {
        $this->db->query("CALL getPenumpang(:username, :password)");
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        return $this->db->single();
    }

    public function getAllPenumpang()
    {
        $this->db->query('CALL selectAllPenumpang()');
        return $this->db->setResults();
    }

    public function updatePenumpang()
    {
        $query = "CALL updatePenumpang(:id_penumpang, :username, :nama_penumpang, :alamat_penumpang, :tanggal_lahir, :jenis_kelamin, :telfone)";
        $this->db->query($query);
        $this->db->bind('id_penumpang', $_POST['id_penumpang']);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('nama_penumpang', $_POST['nama_penumpang']);
        $this->db->bind('alamat_penumpang', $_POST['alamat_penumpang']);
        $this->db->bind('tanggal_lahir', $_POST['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $_POST['jenis_kelamin']);
        $this->db->bind('telfone', $_POST['telfone']);
        return $this->db->rowCount();
    }

    public function hapusPenumpang($id)
    {
        $query = "CALL hapusPenumpang($id)";
        $this->db->query($query);
        return $this->db->rowCount();
    }
}
