<?php

require_once 'item_buku.php';

//class Buku_Referensi mewarisi class Item_Buku dan class Buku.

class Buku_Referensi extends Item_Buku {}

//Objek Buku Referensi
$buku = new Buku_Referensi(1, "121", "Menguasai OOP PHP", "Computer Science", "INFORMATIKA", "Bahasa Indonesia", "300", "5", "Priyatno Hidayatullah", 50000, "Active", "10/12/2019", "01/10/2015");

//display info buku referensi
echo "\nDisplay Info Buku Referensi";
echo "\nID: " .$buku->getIdBuku();
echo "\nISSN: " .$buku->getISBN();
echo "\nJudul: " .$buku->getJudulBuku();
echo "\nSubjek: " .$buku->getSubjekBuku();
echo "\nPenerbit: " .$buku->getPenerbit();
echo "\nBahasa: " .$buku->getBahasa();
echo "\nJumlah halaman: " .$buku->getJumlahHalaman();
echo "\nEdisi: " .$buku->getEdisi();
echo "\nPenulis: ".$buku->getPenulis();

echo "\n\nDisplay Info Item Buku Referensi";
echo "\nHarga: Rp." .$buku->getHarga();
echo "\nStatus: " .$buku->getStatus();
echo "\nTanggal Beli: " .$buku->getTanggalBeli();
echo "\nTanggal Publikasi: " .$buku->getTanggalPublikasi();

?>