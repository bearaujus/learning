<?php

class MahasiswaModel
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->getAllData();
    }

    public function getAllDataFiltered()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :nama OR nrp LIKE :nrp";
        $this->db->query($query);
        $this->db->bind('nama', '%' . $keyword . '%');
        $this->db->bind('nrp', '%' . $keyword . '%');
        return $this->db->getAllData();
    }

    public function getByID($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->getSingleData();
    }

    public function insert($data)
    {
        $query = "INSERT INTO MAHASISWA VALUES ('', :nama, :nrp, :email, :jurusan, '')";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE MAHASISWA SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
