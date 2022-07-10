<?php
require_once "class_mahasiswa.php";

$mahasiswa = new Mahasiswa(01110221165, "Andi", 3, "TI", 2020);
echo "Predikat " . $mahasiswa->predikat_ipk();
echo "<br>";
echo $mahasiswa->nama . " mendapatkan IPK " . $mahasiswa->ipk;
