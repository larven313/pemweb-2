<?php
require_once "class_dispenser.php";

class Gelas extends Dispenser
{

    // public function minuman($nama_minuman, $harga_segelas)
    // {
    //     $this->namaMinuman = $nama_minuman;
    //     $this->hargaSegelas = $harga_segelas;
    // }
    public function __construct($volume_gelas)
    {
        $this->volumeGelas = $volume_gelas;
    }

    public function beli($nama_minuman,  $harga_segelas)
    {
        $this->namaMinuman = $nama_minuman;
        $this->hargaSegelas = $harga_segelas;
        $this->volume - $this->volumeGelas;
    }
}

$galon = new Dispenser(3000);
$gelas = new Gelas(250);
$galon->cetak();
// $galon->volume - 400;

$gelas->beli("Fanta", 5000);
$galon->cetak();
