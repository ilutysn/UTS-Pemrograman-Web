<?php

require_once 'buku.php';

//Abstract cLass Item_Buku merupakan super class untuk kelas turunannya, yaitu Buku_Referensi, Majalah, Jurnal.

abstract class Item_Buku extends Buku
{
    //properti
    private $harga;
    private $status;
    private $tanggalBeli;
    private $tanggalPublikasi;

    public function __construct($idBuku, $ISBN, $judulBuku, $subjekBuku, $penerbit, $bahasa, $jumlahHalaman, $edisi, $penulis, $harga, $status, $tanggalBeli, $tanggalPublikasi)
    {
        parent::__construct($idBuku, $ISBN, $judulBuku, $subjekBuku, $penerbit, $bahasa, $jumlahHalaman, $edisi, $penulis);
        $this->harga = $harga;
        $this->status = $status;
        $this->tanggalBeli = $tanggalBeli;
        $this->tanggalPublikasi = $tanggalPublikasi;
    }

    //metode
    public function setHarga($harga) : void
    {
        $this->harga = $harga;
    }
    public function getHarga() : float
    {
        return $this->harga;
    }
    public function setStatus($status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : bool
    {
        return $this->status;
    }
    public function setTanggalBeli($tanggalBeli) : void
    {
        $this->tanggalBeli = $tanggalBeli;
    }
    public function getTanggalBeli() : string
    {
        return $this->tanggalBeli;
    }
    public function setTanggalPublikasi($tanggalPublikasi) : void
    {
        $this->tanggalPublikasi = $tanggalPublikasi;
    }
    public function getTanggalPublikasi() : string
    {
        return $this->tanggalPublikasi;
    }
}
//end class Item_Buku

?>