<?php require_once "layout/header.php";

require_once "models/Datauser.php";
// mengecek apakah form sudah disubmit
if (isset($_POST['submit'])) {
    // mengambil data dari form
    $nama = $_POST['nama']; // nama
    $email = $_POST['email']; // email
    $phone = $_POST['phone']; // phone
    $alamat = $_POST['alamat']; // alamat
    $varian = $_POST['varian']; // varian
    // $servis = $_POST['servis']; // service
    // membuat objek datauser
    $datauser = new Datauser($nama, $email, $phone, $alamat, $varian);
    // menyimpan datauser ke database
    $result = $datauser->save();
    // mengecek apakah penyimpanan berhasil
    if ($result) { // jika berhasil
        // menampilkan pesan sukses
        echo "<script>alert('Data berhasil disimpan');</script>";
        header("Location: " . $_SERVER['PHP_SELF']);
        // menghentikan eksekusi skrip
        exit;
    } else { // jika gagal
        // menampilkan pesan error
        echo "<script>alert('Data gagal disimpan: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Masukan Data</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">No Hp</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Nomor Handphone" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varian">Varian Motor</label>
                                <select name="varian" id="motor" class="form-control">
                                    <option value="scoopy">Scoopy</option>
                                    <option value="beat">Beat</option>
                                    <option value="pcx">PCX</option>
                                    <option value="vario">Vario</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>