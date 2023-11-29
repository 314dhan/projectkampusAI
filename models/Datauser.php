<?php
require_once "config/Database.php";
class Datauser
{
    public $nama;
    public $email;
    public $phone;
    public $alamat;
    public $varian;

    public function __construct($nama, $email, $phone, $alamat, $varian){
        $this->nama = $nama;
        $this->email = $email;
        $this->phone = $phone;
        $this->alamat = $alamat;
        $this->varian = $varian;
    }

    public function save(){
        $db = new Database();
        $sql = "INSERT INTO datauser (nama, email, phone, alamat, varian) 
        VALUES ('$this->nama', '$this->email', '$this->phone', '$this->alamat', '$this->varian')";
        $result = $db->query($sql);
        return $result;
    }

    public static function get_all(){
        $db = new Database();
        $sql = "SELECT * FROM datauser";
        $result = $db->query($sql);
        $datausers = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $datauser = new Datauser($row['nama'], $row['email'], $row['phone'], $row['alamat'], $row['varian']);
            $datausers[] = $datauser;
        }
        return $datausers;
    }
}
