<?php require "header.php"; ?>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php require "nav.php";?>
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Data Kerusakan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Kode Kerusakan</th>
                                    <th>Jenis Kerusakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TG01</td>
                                    <td>Tarikan Gas Berat</td>
                                </tr>
                                <tr>
                                    <td>MO02</td>
                                    <td>Mesin Overheat</td>
                                </tr>
                                <tr>
                                    <td>RK03</td>
                                    <td>Rem Kurang Pakem</td>
                                </tr>
                                <tr>
                                    <td>BR04</td>
                                    <td>Bearing Roda Rusak</td>
                                </tr>
                                <tr>
                                    <td>BB05</td>
                                    <td>Bahan Bakar Boros</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>