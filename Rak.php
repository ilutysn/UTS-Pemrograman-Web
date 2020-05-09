<?php

//Class Rak merupakan class yang digunakan untuk lokasi dimana buku disimpan.

class Rak
{
    //properti
    var $nomorInduk;
    var $nomorKlasifikasi;

    //construct
    public function __construct($nomorInduk, $nomorKlasifikasi)
    {
        $this->nomorInduk = $nomorInduk;
        $this->nomorKlasifikasi = $nomorKlasifikasi;
    }

    //metode
    public function setNomorInduk($nomorInduk) : void
    {
        $this->nomorInduk = $nomorInduk;
    }
    public function getNomorInduk() : int
    {
        return $this->nomorInduk;
    }
    public function setNomorKlasifikasi($nomorKlasifikasi) : void
    {
        $this->nomorKlasifikasi = $nomorKlasifikasi;
    }
    public function getNomorKlasifikasi() : string
    {
        return $this->nomorKlasifikasi;
    }
}
//end class Rak

//Objek rak

//instansiasi
$rak = new Rak(126121742, "005.13/HER/m");

//display info rak
echo "\nDisplay Penomoran Buku di Rak";
echo "\nNomor Induk: " .$rak->getNomorInduk();
echo "\nNomor Klasifikasi: " .$rak->getNomorKlasifikasi();

?>