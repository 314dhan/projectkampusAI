<?php
// memuat file kelas database
require_once "database.php";
// membuat kelas datauser
class Datauser
{
    // mendefinisikan properti datauser
    private $nama; // nama
    private $email; // email
    private $phone; // phone
    private $alamat; // alamat
    private $varian; // varian
    private $service; // service

    // membuat konstruktor
    public function __construct($nama, $email, $phone, $alamat, $varian, $service)
    {
        // mengisi properti datauser
        $this->nama = $nama;
        $this->email = $email;
        $this->phone = $phone;
        $this->alamat = $alamat;
        $this->varian = $varian;
        $this->service = $service;
    }

    // membuat fungsi untuk menyimpan datauser ke database
    public function save()
    {
        // membuat objek database
        $db = new Database();
        // membuat query untuk menyimpan datauser ke database
        $sql = "INSERT INTO datauser (nama, email, phone, alamat, varian, service) VALUES ('$this->nama', '$this->email', '$this->phone', '$this->alamat', '$this->varian', '$this->service')";
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
            $datauser = new Datauser($row['nama'], $row['email'], $row['phone'], $row['alamat'], $row['varian'], $row['service']);
            // menambahkan datauser ke array
            $datausers[] = $datauser;
        }
        // mengembalikan array datauser
        return $datausers;
    }
}
