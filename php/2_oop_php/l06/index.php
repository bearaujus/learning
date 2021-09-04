<?php

class Mahasiswa
{
    public $nrp;
    public $nama;
    public $jurusan;
    public $version;

    public function __construct($nrp, $nama, $jurusan, $version = 1)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->version = $version;
    }

    public function getNrp()
    {
        return $this->nrp;
    }
}

class StaffLab extends Mahasiswa
{
    public $isActive;
    public $desc;

    public function __construct($nrp, $nama, $jurusan, $desc)
    {
        // Overriding Constructor
        parent::__construct($nrp, $nama, $jurusan);
        $this->isActive = true;
        $this->desc = $desc;
    }

    public function getStatus()
    {
        $output = parent::getNrp() . " | " . ($this->isActive ? "Active Staff Lab" : "Inactive Staff Lab") . " | $this->desc";
        return $output;
    }

    public function exitStaff()
    {
        $this->isActive = false;
    }
}

class PrintMahasiswa
{
    public function getData(Mahasiswa $mhs)
    {
        return "$mhs->nrp - $mhs->nama | $mhs->jurusan | v$mhs->version";
    }
}

$mahasiswaPrintFunc = new PrintMahasiswa();

$staffLab1 = new StaffLab('1773031', 'Haryo Bagas Assyafah', 'Sistem Informasi', 'Saya akan bekerja keras !');
echo $staffLab1->getStatus();
echo '<br>';

// Calling Function From Child Class
$staffLab1->exitStaff();
echo $staffLab1->getStatus();
echo '<br>';

// Calling Function From Parrent Class
echo $staffLab1->getNrp();
echo '<br>';
