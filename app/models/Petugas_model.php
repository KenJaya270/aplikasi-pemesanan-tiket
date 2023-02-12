<?php
class Petugas_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPetugas()
    {
        $query = 'CALL selectAllPetugas()';
        $this->db->query($query);
        return $this->db->setResults();
    }

    public function getPetugas()
    {
        $query = "CALL getPetugas(:username, :password)";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        return $this->db->single();
    }

    public function petugasValidate()
    {
        $query = "CALL getPetugas(:username, :password)";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        return $this->db->rowCount();
    }

    public function insertPetugas()
    {
        $query = "CALL insertPetugas(null, :username, :password, :nama_petugas, :id_level)";
        $this->db->query($query);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('password', $_POST['password']);
        $this->db->bind('nama_petugas', $_POST['nama_petugas']);
        $this->db->bind('id_level', $_POST['id_level']);
        return $this->db->rowCount();
    }

    public function updatePetugas()
    {
        $query = "CALL updatePetugas(:id_petugas, :username, :nama_petugas, :id_level)";
        $this->db->query($query);
        $this->db->bind('id_petugas', $_POST['id_petugas']);
        $this->db->bind('username', $_POST['username']);
        $this->db->bind('nama_petugas', $_POST['nama_petugas']);
        $this->db->bind('id_level', $_POST['id_level']);
        return $this->db->rowCount();
    }

    public function hapusPetugas($id)
    {
        $query = "CALL deletePetugasById($id)";
        $this->db->query($query);
        return $this->db->rowCount();
    }
}
