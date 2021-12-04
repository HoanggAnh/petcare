<?php
class User
{
    private $IDKH;
    private $HoTen;
    private $DiaChi;
    private $SDT;
    private $Email;


    public function __construct(){
        $this->IDKH = "";
        $this->HoTen = "";
        $this->DiaChi = "";
        $this->SDT="";
        $this->Email="";
    }


    public function getDuLieu($khachhang){
        $row = mysqli_fetch_array($khachhang);
        $this->IDKH = $row['IDKH'];
        $this->HoTen = $row['HoTen'];
        $this->DiaChi = $row['DiaChi'];
        $this->SDT = $row['SDT'];
        $this->Email = $row['Email'];

    }

    public function getID(){
        return $this->IDKH;
    }
    public function getHoTen(){
        return $this->HoTen;
    }
    public function getDiaChi(){
        return $this->DiaChi;
    }
    public function getSDT(){
        return $this->SDT;
    }
    public function getEmail(){
        return $this->Email;
    }


}
