<?php $title = "Basis Pengetahuan";
require_once "layout/header.php";
require_once "text.php";
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php require "layout/nav.php" ?>
            <div class="col-md-9">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center">Basis Pengetahuan</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>Kode Kerusakan</th>
                                <th>Kerusakan</th>
                                <th>Kode Gejala</th>
                                <th>Gejala Kerusakan</th>
                                <th>Nilai CF Pakar</th>
                                <th>Nilai CF User</th>
                            </thead>
                            <tbody>
                                <!-- 1 -->
                                <tr>
                                    <td rowspan="3">KD001</td>
                                    <td rowspan="3">Area cvt kotor</td>
                                    <td>G01</td>
                                    <td><?= $text1 ?></td>
                                    <td>0.8</td>
                                    <td>0.8</td>
                                </tr>
                                <tr>
                                    <td>G02</td>
                                    <td><?= $text2 ?></td>
                                    <td>1</td>
                                    <td>0.8</td>
                                </tr>
                                <tr>
                                    <td>G03</td>
                                    <td><?= $text3 ?></td>
                                    <td>0.8</td>
                                    <td>0.6</td>
                                </tr>
                                <!-- 2 -->
                                <tr>
                                    <td rowspan="3">KD002</td>
                                    <td rowspan="3">Suspensi Melemah</td>
                                    <td>G04</td>
                                    <td><?= $text4 ?></td>
                                    <td>0.6</td>
                                    <td>0.6</td>
                                </tr>
                                <tr>
                                    <td>G05</td>
                                    <td><?= $text5 ?></td>
                                    <td>1</td>
                                    <td>0.8</td>
                                </tr>
                                <tr>
                                    <td>G06</td>
                                    <td><?= $text6 ?></td>
                                    <td>0.8</td>
                                    <td>1</td>
                                </tr>
                                <!-- 3 -->
                                <tr>
                                    <td rowspan="3">KD003</td>
                                    <td rowspan="3">Suspensi Melemah</td>
                                    <td>G07</td>
                                    <td><?= $text7 ?></td>
                                    <td>1</td>
                                    <td>0.6</td>
                                </tr>
                                <tr>
                                    <td>G08</td>
                                    <td><?= $text8 ?></td>
                                    <td>0.8</td>
                                    <td>0.8</td>
                                </tr>
                                <tr>
                                    <td>G09</td>
                                    <td><?= $text9 ?></td>
                                    <td>0.8</td>
                                    <td>0.8</td>
                                </tr>
                                <!-- 4 -->
                                <tr>
                                    <td rowspan="3">KD004</td>
                                    <td rowspan="3">Suspensi Melemah</td>
                                    <td>G10</td>
                                    <td><?= $text10 ?></td>
                                    <td>1</td>
                                    <td>0.8</td>
                                </tr>
                                <tr>
                                    <td>G11</td>
                                    <td><?= $text11 ?></td>
                                    <td>0.6</td>
                                    <td>0.4</td>
                                </tr>
                                <tr>
                                    <td>G12</td>
                                    <td><?= $text12 ?></td>
                                    <td>0.6</td>
                                    <td>0.8</td>
                                </tr>
                                <!-- 5 -->
                                <tr>
                                    <td rowspan="3">KD005</td>
                                    <td rowspan="3">Suspensi Melemah</td>
                                    <td>G13</td>
                                    <td><?= $text13 ?></td>
                                    <td>0.8</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>G14</td>
                                    <td><?= $text14 ?></td>
                                    <td>1</td>
                                    <td>0.6</td>
                                </tr>
                                <tr>
                                    <td>G15</td>
                                    <td><?= $text15 ?></td>
                                    <td>0.8</td>
                                    <td>0.8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>