<?php

require_once 'item_buku.php';

//class Jurnal mewarisi class Item_Buku dan class Buku.

class Jurnal extends Item_Buku {}

//Objek Jurnal
$jurnal = new Jurnal(1, "10", "Object Oriented Programming in PHP", "Computer Science", "ScienceDirect", "Bahasa Inggris", "6", "2", "John Milton", 0, "Ada", "12/12/2019", "01/01/2016");

//display
echo "\n\nDisplay Info Buku Referensi";
echo "\nID: " .$jurnal->getIdBuku();
echo "\nISBN: " .$jurnal->getISBN();
echo "\nJudul: " .$jurnal->getJudulBuku();
echo "\nSubjek: " .$jurnal->getSubjekBuku();
echo "\nPenerbit: " .$jurnal->getPenerbit();
echo "\nBahasa: " .$jurnal->getBahasa();
echo "\nJumlah halaman: " .$jurnal->getJumlahHalaman();
echo "\nEdisi: " .$jurnal->getEdisi();
echo "\nPenulis: ".$jurnal->getPenulis();

echo "\n\nDisplay Info Item Jurnal";
echo "\nHarga: Rp." .$jurnal->getHarga();
echo "\nStatus: " .$jurnal->getStatus();
echo "\nTanggal Beli: " .$jurnal->getTanggalBeli();
echo "\nTanggal Publikasi: " .$jurnal->getTanggalPublikasi();

?>