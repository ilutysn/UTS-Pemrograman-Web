<?php

//Abstract cLass Buku merupakan super class untuk kelas turunannya, yaitu Item_Buku, Buku_Referensi, Majalah, Jurnal.

abstract class Buku
{
    //properti
    var $idBuku;
    var $ISBN;
    var $judulBuku;
    var $subjekBuku;
    var $penerbit;
    var $bahasa;
    var $jumlahHalaman;
    var $edisi;
    var $penulis;

    //construct
    public function __construct($idBuku, $ISBN, $judulBuku, $subjekBuku, $penerbit, $bahasa, $jumlahHalaman, $edisi, $penulis)
    {
        $this->idBuku = $idBuku;
        $this->ISBN = $ISBN;
        $this->judulBuku = $judulBuku;
        $this->subjekBuku = $subjekBuku;
        $this->penerbit = $penerbit;
        $this->bahasa = $bahasa;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->edisi = $edisi;
        $this->penulis = $penulis;
    }

    //metode
    public function setIdBuku($idBuku) : void
    {
        $this->idBuku = $idBuku;
    }
    public function getIdBuku() : int
    {
        return $this->idBuku;
    }
    public function setISBN($ISBN) : void
    {
        $this->ISBN = $ISBN;
    }
    public function getISBN() : string
    {
        return $this->ISBN;
    }
    public function setJudulBuku($judulBuku) : void
    {
        $this->judulBuku = $judulBuku;
    }
    public function getJudulBuku() : string
    {
        return $this->judulBuku;
    }
    public function setSubjekBuku($subjekBuku) : void
    {
        $this->subjekBuku = $subjekBuku;
    }
    public function getSubjekBuku() : string
    {
        return $this->subjekBuku;
    }
    public function setBahasa($bahasa) : void
    {
        $this->bahasa = $bahasa;
    }
    public function getBahasa() : string
    {
        return $this->bahasa;
    }
    public function setPenerbit($penerbit) : void
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit() : string
    {
        return $this->penerbit;
    }
    public function setJumlahHalaman($jumlahHalaman) : void
    {
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getJumlahHalaman() : int
    {
        return $this->jumlahHalaman;
    }
    public function setPenulis($penulis): void
    {
        $this->penulis = $penulis;
    }
    public function getPenulis() : string
    {
        return $this->penulis;
    }
    public function setEdisi($edisi) : void
    {
        $this->edisi = $edisi;
    }
    public function getEdisi() : string
    {
        return $this->edisi;
    }
}
//end class Buku