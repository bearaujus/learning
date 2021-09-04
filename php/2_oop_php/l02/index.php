<?php

class Mahasiswa
{
    // Property
    public $nrp = '1773031',
        $nama = 'Haryo Bagas Assyafah',
        $jurusan = 'Sistem Informasi',
        $type = 'Mahasiswa',
        $version = 1;

    // Method
    public function getData()
    {
        return "[$this->type] $this->nrp - $this->nama | $this->jurusan | v$this->version";
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nama = 'Bear Au Jus';
print_r($mhs1);
echo '<br>';

$mhs2 = new Mahasiswa();
print_r($mhs2);
echo '<br>';

echo $mhs1->getData();
echo '<br>';

echo $mhs2->getData();
echo '<br>';
