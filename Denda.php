<?php

//Class Denda digunakan bagi yang telat mengumpulkan buku.

class Denda
{
    //properti
    private $hargaDenda;
    private $tanggalBuat;

    //construct
    public function __construct($hargaDenda, $tanggalBuat)
    {
        $this->hargaDenda = $hargaDenda;
        $this->tanggalBuat = $tanggalBuat;
    }

    //metode
    public function setHargaDenda($hargaDenda) : void
    {
        $this->hargaDenda = $hargaDenda;
    }
    public function getHargaDenda() : int
    {
        return $this->hargaDenda;
    }
    public function setTanggalBuat($tanggalBuat) : void
    {
        $this->tanggalBuat = $tanggalBuat;
    }
    public function getTanggalBuat() : string
    {
        return $this->tanggalBuat;
    }
}
//end class Denda


//Objek denda

//instansiasi
$denda = new Denda(1000, "10/01/2020");

//display info denda
echo "\nDisplay Info Denda";
echo "\nHarga Denda: " .$denda->getHargaDenda();
echo "\nTanggal Denda Dibuat: " .$denda->getTanggalBuat();

?>