<?php
// membuat kelas database
class Database
{
    // mendefinisikan properti koneksi
    private $host = "localhost"; // nama host
    private $user = "root"; // nama user
    private $pass = ""; // password
    private $db = "certaintyfactor"; // nama database
    private $conn; // koneksi

    // membuat konstruktor
    public function __construct()
    {
        // membuka koneksi ke database
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        // mengecek apakah koneksi berhasil
        if (!$this->conn) { // jika gagal
            die("Connection failed: " . mysqli_connect_error()); // menampilkan pesan error
        }
    }

    // membuat fungsi untuk menjalankan query
    public function query($sql)
    {
        // menjalankan query
        $result = mysqli_query($this->conn, $sql);
        // mengembalikan hasil query
        return $result;
    }
}
