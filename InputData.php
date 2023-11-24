<?php require_once "header.php";

require_once "datauser.php";
// mengecek apakah form sudah disubmit
if (isset($_POST['submit'])) {
    // mengambil data dari form
    $nama = $_POST['nama']; // nama
    $email = $_POST['email']; // email
    $phone = $_POST['phone']; // phone
    $alamat = $_POST['alamat']; // alamat
    $varian = $_POST['varian']; // varian
    $service = $_POST['service']; // service
    // membuat objek datauser
    $datauser = new Datauser($nama, $email, $phone, $alamat, $varian, $service);
    // menyimpan datauser ke database
    $result = $datauser->save();
    // mengecek apakah penyimpanan berhasil
    if ($result) { // jika berhasil
        // menampilkan pesan sukses
        echo "<script>alert('Data berhasil disimpan');</script>";
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
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">No Hp</label>
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Nomor Handphone" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Alamat" required>
                            </div>
                            <div class="form-group" aria-label="Default select example">
                                <label for="motor">Varian Motor</label>
                                <select name="motor" id="motor">
                                    <option value="scoopy">Scoopy</option>
                                    <option value="beat">Beat</option>
                                    <option value="pcx">PCX</option>
                                    <option value="vario">Vario</option>
                                </select>
                            </div>
                            <div class="form-group" aria-label="Default select example">
                                <label for="service">Jenis Service</label>
                                <select name="service" id="service">
                                    <option value="ganti oli">Ganti Oli</option>
                                    <option value="tune up">Tune Up</option>
                                    <option value="ganti ban">Ganti Ban</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary btn-block">Daftar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p class="text-center">Sudah punya akun? <a href="login.html">Masuk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>