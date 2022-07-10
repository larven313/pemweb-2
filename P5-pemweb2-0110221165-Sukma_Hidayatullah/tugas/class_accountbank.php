<?php
require_once "class_account.php";
class AccountBank extends Account
{
    public $customer;

    function __construct($no, $saldo_awal, $customer)
    {
        // memanggil constructor parent class
        parent::__construct($no, $saldo_awal);
        $this->customer = $customer;
    }

    public function transfer($ab_tujuan, $uang)
    {
        $this->withdraw($uang); //saldo di akun berkurang
        $ab_tujuan->deposit($uang); //saldo di akun tujuan berkurang
        $this->biayaTransfer();
    }

    private function biayaTransfer()
    {
        $this->withdraw(6000); //biaya transfer 6 ribu
    }

    public function cetak()
    {
        parent::cetak(); //panggil fungsi parent class
        echo "<br/> Nama Customer : " . $this->customer;
    }
}
