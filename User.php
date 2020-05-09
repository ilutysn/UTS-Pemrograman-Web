<?php

require_once 'akun.php';

//Class User merupakan superclass dari class Pengelola_Perpustakaan.

class User
{
    //properti
    var $id;
    var $nama;
    var $alamat;
    var $gender;
    var $noTelp;

    //construct
    public function __construct($id, $nama, $alamat, $gender, $noTelp)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->gender = $gender;
        $this->noTelp = $noTelp;
    }

    //metode
    public function setId($id) : void
    {
        $this->id = $id;
    }
    public function getId() : int
    {
        return $this->id;
    }
    public function setNama($nama) : void
    {
        $this->nama = $nama;
    }
    public function getNama() : string
    {
        return $this->nama;
    }
    public function setAlamat($alamat) : void
    {
        $this->alamat = $alamat;
    }
    public function getAlamat() : string
    {
        return $this->alamat;
    }
    public function setGender($gender) : void
    {
        $this->gender = $gender;
    }
    public function getGender() : string
    {
        return $this->gender;
    }
    public function setNoTelp($noTelp) : void
    {
        $this->noTelp = $noTelp;
    }
    public function getNoTelp() : int
    {
        return $this->noTelp;
    }
}
//end class User


//Objek Pengelola Perpustakaan = Pustakawan

//instansiasi
$pustakawan = new User(2, "Nabila Putri Listyanto", "Jl. Tambak no. 6", "perempuan", +6281330455661);

//display info user
echo "\nDisplay Data User Milik Pengelola Perpustakaan";
echo "\nID: " .$pustakawan->getId();
echo "\nNama Lengkap: " .$pustakawan->getNama();
echo "\nAlamat: " .$pustakawan->getAlamat();
echo "\nJenis Kelamin: " .$pustakawan->getGender();
echo "\nNomor Telepon: " .$pustakawan->getNoTelp();

?>