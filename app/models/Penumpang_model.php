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

    public function insertUser()
    {
        $query = "INSERT INTO {$this->penumpang} VALUES(null, :username, :password, :nama_penumpang, :alamat_penumpang, :tanggal_lahir, :jenis_kelamin, :telfone)";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        $this->db->bind('nama_penumpang', $_POST['nama_penumpang']);
        $this->db->bind('alamat_penumpang', $_POST['alamat_penumpang']);
        $this->db->bind('tanggal_lahir', $_POST['tanggal_lahir']);
        $this->db->bind('jenis_kelamin', $_POST['jenis_kelamin']);
        $this->db->bind('telfone', $_POST['telfone']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function userValidate()
    {
        $query = "SELECT * FROM {$this->petugas}, {$this->penumpang} WHERE ({$this->petugas}.username = :username AND {$this->petugas}.password = :password) || ({$this->penumpang}.username = :username AND {$this->penumpang}.password = :password)";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        return $this->db->single();
    }
}
