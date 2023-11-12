<?php require "header.php" ?>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php require "nav.php"; ?>
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Data Gejala</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nama Kerusakan</th>
                                    <th>Gejala Kerusakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tarikan Gas Berat</td>
                                    <td>Gas motor terasa berat saat ditarik, putaran mesin tidak stabil, suara mesin kasar.</td>
                                </tr>
                                <tr>
                                    <td>Mesin Overheat</td>
                                    <td>Mesin motor terasa panas berlebihan, lampu indikator overheat menyala, performa mesin menurun.</td>
                                </tr>
                                <tr>
                                    <td>Rem Kurang Pakem</td>
                                    <td>Rem motor tidak berfungsi dengan baik, jarak pengereman menjadi lebih jauh, suara berdecit saat mengerem.</td>
                                </tr>
                                <tr>
                                    <td>Bearing Roda Rusak</td>
                                    <td>Roda motor terasa berat saat diputar, suara berisik dari roda, getaran pada roda.</td>
                                </tr>
                                <tr>
                                    <td>Bahan Bakar Boros</td>
                                    <td>Konsumsi bahan bakar motor menjadi tidak efisien, asap knalpot berwarna hitam, akselerasi mesin terganggu.</td>
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