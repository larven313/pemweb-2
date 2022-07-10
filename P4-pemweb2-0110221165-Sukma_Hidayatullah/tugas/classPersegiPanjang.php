<?php
class PersegiPanjang
{
    var $p;
    var $l;

    public function __construct($p, $l)
    {
        $this->p = $p;
        $this->l = $l;
    }

    public function getLuas()
    {
        return $this->p * $this->l;
    }

    public function getKeliling()
    {
        return 2 * ($this->p * $this->l);
    }
}
