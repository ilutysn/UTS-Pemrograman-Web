<?php

//Class Peminjaman merupakan transaksi yang ada di perpustakaan,

class Peminjaman
{
    //properti
    var $tanggalPeminjaman;
    var $lamaPeminjaman;
    var $tanggalPengembalian;

    //construct
    public function __construct($tanggalPeminjaman, $lamaPeminjaman, $tanggalPengembalian)
    {
        $this->tanggalPeminjaman = $tanggalPeminjaman;
        $this->lamaPeminjaman = $lamaPeminjaman;
        $this->tanggalPengembalian = $tanggalPengembalian;
    }

    //metode
    public function setTanggalPeminjaman($tanggalPeminjaman) : void
    {
        $this->tanggalPeminjaman = $tanggalPeminjaman;
    }
    public function getTanggalPeminjaman() : string
    {
        return $this->tanggalPeminjaman;
    }
    public function setLamaPeminjaman($lamaPeminjaman) : void
    {
        $this->lamaPeminjaman = $lamaPeminjaman;
    }
    public function getLamaPeminjaman() : int
    {
        return $this->lamaPeminjaman;
    }
    public function setTanggalPengembalian($tanggalPengembalian) : void
    {
        $this->tanggalPengembalian = $tanggalPengembalian;
    }
    public function getTanggalPengembalian() : string
    {
        return $this->tanggalPengembalian;
    }
}
//end class Peminjaman


//Objek Peminjaman

//instansiasi
$peminjaman = new Peminjaman("10/01/2020", 14, "24/01/2020");

//display info peminjaman
echo "\nDisplay Info Peminjaman";
echo "\nTanggal Peminjaman: " .$peminjaman->getTanggalPeminjaman();
echo "\nLama Peminjaman: "  .$peminjaman->getLamaPeminjaman();
echo "\nTanggal Pengembalian: " .$peminjaman->getTanggalPengembalian();

?>