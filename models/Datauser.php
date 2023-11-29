<?php
require "../config/Database.php";
class Datauser
{
    // mendefinisikan properti datauser
    public $nama; // nama
    public $email; // email
    public $phone; // phone
    public $alamat; // alamat
    public $varian; // varian
    // public $servis; // service

    // membuat konstruktor
    public function __construct($nama, $email, $phone, $alamat, $varian)
    {
        // mengisi properti datauser
        $this->nama = $nama;
        $this->email = $email;
        $this->phone = $phone;
        $this->alamat = $alamat;
        $this->varian = $varian;
        // $this->servis = $servis;
    }

    // membuat fungsi untuk menyimpan datauser ke database
    public function save()
    {
        // membuat objek database
        $db = new Database();
        // membuat query untuk menyimpan datauser ke database
        $sql = "INSERT INTO datauser (nama, email, phone, alamat, varian) VALUES ('$this->nama', '$this->email', '$this->phone', '$this->alamat', '$this->varian')";
        // menjalankan query
        $result = $db->query($sql);
        // mengembalikan hasil query
        return $result;
    }

    // membuat fungsi untuk mengambil semua datauser dari database
    public static function get_all()
    {
        // membuat objek database
        $db = new Database();
        // membuat query untuk mengambil semua datauser dari database
        $sql = "SELECT * FROM datauser";
        // menjalankan query
        $result = $db->query($sql);
        // membuat array untuk menampung datauser
        $datausers = array();
        // mengambil datauser dari hasil query
        while ($row = mysqli_fetch_assoc($result)) {
            // membuat objek datauser
            $datauser = new Datauser($row['nama'], $row['email'], $row['phone'], $row['alamat'], $row['varian']);
            // menambahkan datauser ke array
            $datausers[] = $datauser;
        }
        // mengembalikan array datauser
        return $datausers;
    }
}
