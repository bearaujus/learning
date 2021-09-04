<?php

// Parent
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

// Child
class StaffLab extends Mahasiswa
{
    public function getStatus()
    {
        $output = "$this->nrp - $this->nama | Staff Lab";
        return $output;
    }
}

class PrintMahasiswa
{
    public function getData(Mahasiswa $mhs)
    {
        return "[$mhs->type] $mhs->nrp - $mhs->nama | $mhs->jurusan | v$mhs->version";
    }
}

$mahasiswaPrintFunc = new PrintMahasiswa();

$staffLab1 = new StaffLab('1773031', 'Haryo Bagas Assyafah', 'Sistem Informasi');
echo $staffLab1->getStatus();
echo '<br>';

echo $mahasiswaPrintFunc->getData($staffLab1);
echo '<br>';
