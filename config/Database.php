<?php
class Database{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "certaintyfactor";
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$this->conn) {
            echo "gagal";
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function query($sql){
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
}
