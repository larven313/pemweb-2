<?php

function luas_segitiga($a, $t)
{
    $luas_segitiga = $a * $t / 2;
    return $luas_segitiga;
}

function luas_persegi_panjang($p, $l)
{
    $luas_persegi_panjang = $p * $l;
    return $luas_persegi_panjang;
}

function luas_kubus($s)
{
    $luas_kubus = $s * $s * $s;
    return $luas_kubus;
}

function luas_balok($p, $l, $t)
{
    $luas_balok = 2 * (($p * $l) + ($p * $t) + ($l * $t));
    return $luas_balok;
}

echo "Luas Segitiga " . luas_segitiga(8, 10);
echo "<br>";
echo "Luas Persegi Panjang " . luas_segitiga(17, 10);
echo "<br>";
echo "Luas Kubus " . luas_kubus(50);
echo "<br>";
echo "Luas Balok " . luas_balok(14, 8, 7);
