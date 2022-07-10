<?php
class Mahasiswa
{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function __construct($nim, $nama, $ipk, $prodi, $thn_angkatan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->ipk = $ipk;
        $this->thn_angkatan = $thn_angkatan;
        $this->prodi = $prodi;
    }

    function predikat_ipk()
    {
        if ($this->ipk < 2) return "Cukup";
        elseif ($this->ipk >= 2 && $this->ipk < 3) return "Baik";

        elseif ($this->ipk >= 3 && $this->ipk < 3.75) return "Memuaskan";

        elseif ($this->ipk >= 3.75 && $this->ipk <= 4) return "Cum Laude";
        // if ($this->ipk < 2) return "Cukup";
        // elseif ($this->ipk >= 2 && $this->ipk <= 3) return "Cukup";
    }

    // function predikat_ipk()
    // {
    //     if ($this->ipk < 2) return "NIM"$this->nim "Cukup";
    //     elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) return "Baik";

    //     elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) return "Memuaskan";

    //     elseif ($this->ipk >= 3.75 && $this->ipk < 4.0) return "Cum Laude";
    // }
}
