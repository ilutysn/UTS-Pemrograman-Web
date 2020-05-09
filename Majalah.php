<?php

require_once 'item_buku.php';

//class Majalah mewarisi class Item_Buku dan class Buku.

class Majalah extends Item_Buku {}

//Objek majalah
$majalah = new Majalah(1, "100", "Majalah UNESA", "Pemenang Lomba", "HUMAS UNESA", "Bahasa Indonesia", "100", "Januari 2020", "HUMAS UNESA", 10000, "Active", "24/10/2019", "12/03/2019");

//display
echo "\n\nDisplay Info Majalah";
echo "\nID: " .$majalah->getIdBuku();
echo "\nISSN: " .$majalah->getISBN();
echo "\nJudul: " .$majalah->getJudulBuku();
echo "\nSubjek: " .$majalah->getSubjekBuku();
echo "\nPenerbit: " .$majalah->getPenerbit();
echo "\nBahasa: " .$majalah->getBahasa();
echo "\nJumlah halaman: " .$majalah->getJumlahHalaman();
echo "\nEdisi: " .$majalah->getEdisi();
echo "\nPenulis: ".$majalah->getPenulis();

echo "\n\nDisplay Info Item Majalah";
echo "\nHarga: Rp." .$majalah->getHarga();
echo "\nStatus: " .$majalah->getStatus();
echo "\nTanggal Beli: " .$majalah->getTanggalBeli();
echo "\nTanggal Publikasi: " .$majalah->getTanggalPublikasi();

?>