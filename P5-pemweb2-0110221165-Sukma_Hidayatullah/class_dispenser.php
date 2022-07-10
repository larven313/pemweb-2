<?php
class Dispenser
{
    // protected $volume;
    public $volume;
    protected $hargaSegelas;
    // private $volumeGelas;
    public $volumeGelas;

    public $namaMinuman;

    public function __construct($vol)
    {
        $this->volume = $vol;
    }

    public function isi($vol)
    {
        if ($this->volume + $vol <= $this->volume) {
            $this->volume += $vol;
        } else {
            echo "Airnya luber tuh yahahaha hayuk mabar bang gip alok";
        }
    }

    public function cetak()
    {
        // $this->volume - 500;
        echo "Volume wadah adalah $this->volume L<br>";
    }

    // public function isiUlang($vol)
    // {
    //     $this->volume += $vol;
    // }
}
