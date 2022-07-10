<?php
function luas_lingkaran($r)
{
    $PHI = 3.14;

    $luas = $PHI * $r * $r;
    return $luas;
}
echo "Luas lingkaran " . luas_lingkaran(8);
