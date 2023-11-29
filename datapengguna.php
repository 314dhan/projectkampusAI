<?php $title = "Data Pengguna";require_once "layout/header.php";
// memuat file kelas datauser
require_once "models/Datauser.php";
// mengambil semua datauser dari database
$datausers = Datauser::get_all();
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php require "layout/nav.php" ?>
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Data Pengguna</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Varian Motor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datausers as $datauser): ?>
                                    <tr>
                                        <td><?= $datauser->nama; ?></td>
                                        <td><?= $datauser->email; ?></td>
                                        <td><?= $datauser->phone; ?></td>
                                        <td><?= $datauser->alamat; ?></td>
                                        <td><?= $datauser->varian; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>