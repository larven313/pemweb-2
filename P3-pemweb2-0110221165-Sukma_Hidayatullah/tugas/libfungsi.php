<?php
function kelulusan($nilai_akhir)
{
    if ($nilai_akhir > 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}



function grade($nilai_akhir)
{

    if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
        return "E";
    } else if ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        return "D";
    } else if ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        return "C";
    } else if ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        return "B";
    } else if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        return "A";
    }
}

function predikat($nilai_akhir)
{

    if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
        return "Sangat Kurang";
    } else if ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        return "Kurang";
    } else if ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        return "Cukup";
    } else if ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        return "Memuaskan";
    } else if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        return "Sangat Memuaskan";
    }
}
