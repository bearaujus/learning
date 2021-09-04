<?php

class Mahasiswa
{
    public $nrp;
    public $nama;
    public $jurusan;
    private $version;

    public function __construct($nrp, $nama, $jurusan, $version = 1)
    {
        $this->nrp = $nrp;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->version = $version;
    }

    // Generating Variable Getter
    public function getVersion()
    {
        return $this->version;
    }

    // Generating Variable Setter
    public function setVersion($version)
    {
        // Filtering Setter Parameter
        if (!is_int($version)) {
            throw new Exception("Version must be Integer !");
        }

        $this->version = $version;
        return $this;
    }

    public function getLabel()
    {
        return "$this->nrp - $this->nama";
    }
}

class StaffLab extends Mahasiswa
{
    public $isActive;
    public $desc;

    public function __construct($nrp, $nama, $jurusan, $desc)
    {
        parent::__construct($nrp, $nama, $jurusan);
        $this->isActive = true;
        $this->desc = $desc;
    }

    public function getStatus()
    {
        $output = parent::getLabel() . " | " . ($this->isActive ? "Active Staff Lab" : "Inactive Staff Lab") . " | $this->desc";
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

$staffLab1->exitStaff();
echo $staffLab1->getStatus();
echo '<br>';

echo $staffLab1->nrp;
echo '<br>';

echo $staffLab1->getVersion();
echo '<br>';

$staffLab1->setVersion(2);
echo $staffLab1->getVersion();
echo '<br>';

$staffLab1->setVersion("asd");
echo $staffLab1->getVersion();
echo '<br>';
