<?php $title = "Data Gejala";require_once "layout/header.php" ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php require "layout/nav.php"; ?>
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Data Gejala</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nama Gejala</th>
                                    <th>Gejala Kerusakan</th>
                                    <th>Kode Gejala</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="4">Tarikan Gas Berat</td>
                                    <td rowspan="4">Gas motor terasa berat saat ditarik, putaran mesin tidak stabil, suara mesin kasar.</td>
                                    <tr><td>G01</td></tr>
                                    <tr><td>G02</td></tr>
                                    <tr><td>G03</td></tr>
                                </tr>
                                <tr>
                                    <td rowspan="4">Mesin Overheat</td>
                                    <td rowspan="4">Mesin motor terasa panas berlebihan, lampu indikator overheat menyala, performa mesin menurun.</td>
                                    <tr><td>G04</td></tr>
                                    <tr><td>G05</td></tr>
                                    <tr><td>G06</td></tr>
                                </tr>
                                <tr>
                                    <td rowspan="4">Rem Kurang Pakem</td>
                                    <td rowspan="4">Rem motor tidak berfungsi dengan baik, jarak pengereman menjadi lebih jauh, suara berdecit saat mengerem.</td>
                                    <tr><td>G07</td></tr>
                                    <tr><td>G08</td></tr>
                                    <tr><td>G09</td></tr>
                                </tr>
                                <tr>
                                    <td rowspan="4">Bearing Roda Rusak</td>
                                    <td rowspan="4">Roda motor terasa berat saat diputar, suara berisik dari roda, getaran pada roda.</td>
                                    <tr><td>G10</td></tr>
                                    <tr><td>G11</td></tr>
                                    <tr><td>G12</td></tr>
                                </tr>
                                <tr>
                                    <td rowspan="4">Bahan Bakar Boros</td>
                                    <td rowspan="4">Konsumsi bahan bakar motor menjadi tidak efisien, asap knalpot berwarna hitam, akselerasi mesin terganggu.</td>
                                    <tr><td>G13</td></tr>
                                    <tr><td>G14</td></tr>
                                    <tr><td>G15</td></tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>