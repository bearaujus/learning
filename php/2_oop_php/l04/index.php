<?php

class Mahasiswa
{
    public $nrp;
    public $nama;
    public $jurusan;
    public $type;
    public $version;

    public function __construct($nrp, $nama, $jurusan, $type = 'Mahasiswa', $version = 1)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->type = $type;
        $this->version = $version;
    }
}

class PrintMahasiswa
{
    // Object Type
    public function getData(Mahasiswa $mhs)
    {
        return "[$mhs->type] $mhs->nrp - $mhs->nama | $mhs->jurusan | v$mhs->version";
    }
}

$mahasiswaPrintFunc = new PrintMahasiswa();

$mhs1 = new Mahasiswa('1773031', 'Haryo Bagas Assyafah', 'Sistem Informasi', 'Dosen', 3);
$mhs1->nrp = '1231234';
$mhs1->nama = 'Bear Au Jus';
echo $mahasiswaPrintFunc->getData($mhs1);
echo '<br>';

$mhs2 = new Mahasiswa('1773031', 'Haryo Bagas Assyafah', 'Sistem Informasi');
echo $mahasiswaPrintFunc->getData($mhs2);
echo '<br>';
