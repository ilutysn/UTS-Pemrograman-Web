<?php

require_once 'user.php';
require_once 'peminjaman.php';
require_once 'denda.php';

//Class Pengelola Perpustakaan mewarisi superclass User.

class Pengelola_Perpustakaan extends User
{
    function submitPengembalian(Peminjaman $tanggalPengembalian)
    {
        return $tanggalPengembalian;
    }
    function addDenda(Denda $hargaDenda)
    {
        return $hargaDenda;
    }
}

?>