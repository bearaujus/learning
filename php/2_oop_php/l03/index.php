<?php

class Mahasiswa
{
    public $nrp;
    public $nama;
    public $jurusan;
    public $type;
    public $version;

    // Constructor
    public function __construct($nrp, $nama, $jurusan, $type = 'Mahasiswa', $version = 1)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->type = $type;
        $this->version = $version;
    }

    public function getData()
    {
        return "[$this->type] $this->nrp - $this->nama | $this->jurusan | v$this->version";
    }
}

$mhs1 = new Mahasiswa('1773031', 'Haryo Bagas Assyafah', 'Sistem Informasi', 'Dosen', 3);
$mhs1->nrp = '1231234';
$mhs1->nama = 'Bear Au Jus';
echo $mhs1->getData();
echo '<br>';

$mhs2 = new Mahasiswa('1773031', 'Haryo Bagas Assyafah', 'Sistem Informasi');
echo $mhs2->getData();
echo '<br>';
