<?php
require_once "classPersegiPanjang.php";

$persegi_panjang = new PersegiPanjang(9, 7);
echo "Persegi Panjang dengan <br> Panjang " . $persegi_panjang->p;
echo "<br> dan Lebar $persegi_panjang->l<br>";
echo "Memiliki Luas : " . $persegi_panjang->getLuas();
echo "<br> dan Keliling : " . $persegi_panjang->getKeliling();
