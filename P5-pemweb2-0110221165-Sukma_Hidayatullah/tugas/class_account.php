<?php
class Account
{
    public $saldo;
    public $nomor;
    protected $nama;



    // constructor
    function __construct($no, $saldo_awal)
    {
        $this->nomor = $no;
        $this->saldo = $saldo_awal;
        // $this->nama = $nama_customer;
    }

    public function deposit($uang)
    {
        $this->saldo = $this->saldo + $uang;
    }

    public function withdraw($uang)
    {
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak()
    {
        echo "Nomor Account : " . $this->nomor;
        echo "<br>";
        echo "Saldo : " . $this->saldo;
        // echo "<br>";
    }
}
