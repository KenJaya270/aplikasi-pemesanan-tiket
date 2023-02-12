<?php
class Level_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLevel()
    {
        $query = "CALL selectAllLevel()";
        $this->db->query($query);
        return $this->db->setResults();
    }

    public function insertLevel()
    {
        $query = 'CALL insertLevel(:nama_level)';
        $this->db->query($query);
        $this->db->bind('nama_level', $_POST['nama_level']);
        return $this->db->rowCount();
    }

    public function editLevel()
    {
        $query = "CALL updateLevelById(:id_level, :nama_level)";
        $this->db->query($query);
        $this->db->bind('id_level', $_POST['id_level']);
        $this->db->bind('nama_level', $_POST['nama_level']);
        return $this->db->rowCount();
    }

    public function hapusLevel($id)
    {
        $query = "CALL deleteLevelById(:id)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->rowCount();
    }
}
