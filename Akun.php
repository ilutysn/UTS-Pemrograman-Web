<?php

//Class Akun digunakan untuk proses registrasi dan login.

class Akun
{
    //properti
    var $idAkun;
    var $email;
    var $password;
    var $tanggalBuat;
    var $status;

    //construct
    public function __construct($idAkun, $email, $password, $tanggalBuat, $status)
    {
        $this->idAkun = $idAkun;
        $this->email = $email;
        $this->password = $password;
        $this->tanggalBuat = $tanggalBuat;
        $this->status = $status;
    }

    //metode
    public function setIdAkun($idAkun) : void
    {
        $this->idAkun = $idAkun;
    }
    public function getIdAkun() : int
    {
        return $this->idAkun;
    }
    public function setEmail($email) : void
    {
        $this->email = $email;
    }
    public function getEmail() : string
    {
        return $this->email;
    }
    public function setPassword($password) : void
    {
        $this->password = $password;
    }
    public function getPassword() : string
    {
        return $this->password;
    }
    public function setTanggalBuat($tanggalBuat) : void
    {
        $this->tanggalBuat = $tanggalBuat;
    }
    public function getTanggalBuat() : string
    {
        return $this->tanggalBuat;
    }
    public function setStatus($status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : bool
    {
        return $this->status;
    }
}
//end class Akun


//Objek Pengelola Perpustakaan = Pustakawan

//instansiasi
$pustakawan = new Akun(1, "nabila.18059@gmail.com", "nabila123", "01/01/2020", "Active");

//display info akun
echo "\nDisplay Data Akun Milik Pengelola Perpustakaan";
echo "\nID: " .$pustakawan->getIdAkun();
echo "\nEmail: " .$pustakawan->getEmail();
echo "\nPasword: " .$pustakawan->getPassword();
echo "\nTanggal Akun Dibuat: " .$pustakawan->getTanggalBuat();
echo "\nStatus Akun: " .$pustakawan->getStatus();

?>