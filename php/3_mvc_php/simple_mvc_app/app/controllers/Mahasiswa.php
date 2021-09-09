<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getAllData();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function details($id)
    {
        $data['judul'] = 'Details Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getByID($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Mahasiswa';
        $data['selectedMhs'] = $this->model('MahasiswaModel')->getByID($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('MahasiswaModel')->insert($_POST) > 0) {
            Flasher::setFlash('success', 'Berhasil', 'Ditambahkan');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('danger', 'Gagal', 'Ditambahkan');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function update()
    {
        if ($this->model('MahasiswaModel')->update($_POST) > 0) {
            Flasher::setFlash('success', 'Berhasil', 'Disimpan');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('danger', 'Gagal', 'Disimpan');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('MahasiswaModel')->delete($id) > 0) {
            Flasher::setFlash('success', 'Berhasil', 'Dihapus');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('danger', 'Gagal', 'Dihapus');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function search()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getAllDataFiltered();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
