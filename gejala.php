<?php $title = "Gejala";
require_once "layout/header.php"; 
require_once "text.php";?>
<body>
    <div class="container mt-4">
        <form method="POST">
            <table class="table table-bordered">
                <tbody align="center">
                    <tr>
                        <th rowspan="2" align="center"><h4>Daftar Gejala</h4></th>
                        <th colspan="7" align="center"><h4>Pilihan</h4></th>
                    </tr>
                    <tr>
                        <td><p>Tidak</p></td>
                        <td><p>Tidak Tahu</p></td>
                        <td><p>Sedikit Yakin</p></td>
                        <td><p>Cukup Yakin</p></td>
                        <td><p>Yakin</p></td>
                        <td><p>Sangat Yakin</p></td>
                    </tr>
                    <tr>
                        <td><b>1. <?= $text1 ?></b></td>
                        <td><input type="radio" name="pilihan1" value="0" required></td>
                        <td><input type="radio" name="pilihan1" value="0.2" required></td>
                        <td><input type="radio" name="pilihan1" value="0.4" required></td>
                        <td><input type="radio" name="pilihan1" value="0.6" required></td>
                        <td><input type="radio" name="pilihan1" value="0.8" required></td>
                        <td><input type="radio" name="pilihan1" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>2. <?= $text2 ?></b></td>
                        <td><input type="radio" name="pilihan2" value="0" required></td>
                        <td><input type="radio" name="pilihan2" value="0.2" required></td>
                        <td><input type="radio" name="pilihan2" value="0.4" required></td>
                        <td><input type="radio" name="pilihan2" value="0.6" required></td>
                        <td><input type="radio" name="pilihan2" value="0.8" required></td>
                        <td><input type="radio" name="pilihan2" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>3. <?= $text3 ?></b></td>
                        <td><input type="radio" name="pilihan3" value="0" required></td>
                        <td><input type="radio" name="pilihan3" value="0.2" required></td>
                        <td><input type="radio" name="pilihan3" value="0.4" required></td>
                        <td><input type="radio" name="pilihan3" value="0.6" required></td>
                        <td><input type="radio" name="pilihan3" value="0.8" required></td>
                        <td><input type="radio" name="pilihan3" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>4. <?= $text4 ?></b></td>
                        <td><input type="radio" name="pilihan4" value="0" required></td>
                        <td><input type="radio" name="pilihan4" value="0.2" required></td>
                        <td><input type="radio" name="pilihan4" value="0.4" required></td>
                        <td><input type="radio" name="pilihan4" value="0.6" required></td>
                        <td><input type="radio" name="pilihan4" value="0.8" required></td>
                        <td><input type="radio" name="pilihan4" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>5. <?= $text5 ?></b></td>
                        <td><input type="radio" name="pilihan5" value="0" required></td>
                        <td><input type="radio" name="pilihan5" value="0.2" required></td>
                        <td><input type="radio" name="pilihan5" value="0.4" required></td>
                        <td><input type="radio" name="pilihan5" value="0.6" required></td>
                        <td><input type="radio" name="pilihan5" value="0.8" required></td>
                        <td><input type="radio" name="pilihan5" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>6. <?= $text6 ?></b></td>
                        <td><input type="radio" name="pilihan6" value="0" required></td>
                        <td><input type="radio" name="pilihan6" value="0.2" required></td>
                        <td><input type="radio" name="pilihan6" value="0.4" required></td>
                        <td><input type="radio" name="pilihan6" value="0.6" required></td>
                        <td><input type="radio" name="pilihan6" value="0.8" required></td>
                        <td><input type="radio" name="pilihan6" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>7. <?= $text7 ?></b></td>
                        <td><input type="radio" name="pilihan7" value="0" required></td>
                        <td><input type="radio" name="pilihan7" value="0.2" required></td>
                        <td><input type="radio" name="pilihan7" value="0.4" required></td>
                        <td><input type="radio" name="pilihan7" value="0.6" required></td>
                        <td><input type="radio" name="pilihan7" value="0.8" required></td>
                        <td><input type="radio" name="pilihan7" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>8. <?= $text8 ?></b></td>
                        <td><input type="radio" name="pilihan8" value="0" required></td>
                        <td><input type="radio" name="pilihan8" value="0.2" required></td>
                        <td><input type="radio" name="pilihan8" value="0.4" required></td>
                        <td><input type="radio" name="pilihan8" value="0.6" required></td>
                        <td><input type="radio" name="pilihan8" value="0.8" required></td>
                        <td><input type="radio" name="pilihan8" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>9. <?= $text9 ?></b></td>
                        <td><input type="radio" name="pilihan9" value="0" required></td>
                        <td><input type="radio" name="pilihan9" value="0.2" required></td>
                        <td><input type="radio" name="pilihan9" value="0.4" required></td>
                        <td><input type="radio" name="pilihan9" value="0.6" required></td>
                        <td><input type="radio" name="pilihan9" value="0.8" required></td>
                        <td><input type="radio" name="pilihan9" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>10. <?= $text10 ?></b></td>
                        <td><input type="radio" name="pilihan10" value="0" required></td>
                        <td><input type="radio" name="pilihan10" value="0.2" required></td>
                        <td><input type="radio" name="pilihan10" value="0.4" required></td>
                        <td><input type="radio" name="pilihan10" value="0.6" required></td>
                        <td><input type="radio" name="pilihan10" value="0.8" required></td>
                        <td><input type="radio" name="pilihan10" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>11. <?= $text11 ?></b></td>
                        <td><input type="radio" name="pilihan11" value="0" required></td>
                        <td><input type="radio" name="pilihan11" value="0.2" required></td>
                        <td><input type="radio" name="pilihan11" value="0.4" required></td>
                        <td><input type="radio" name="pilihan11" value="0.6" required></td>
                        <td><input type="radio" name="pilihan11" value="0.8" required></td>
                        <td><input type="radio" name="pilihan11" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>12. <?= $text12 ?></b></td>
                        <td><input type="radio" name="pilihan12" value="0" required></td>
                        <td><input type="radio" name="pilihan12" value="0.2" required></td>
                        <td><input type="radio" name="pilihan12" value="0.4" required></td>
                        <td><input type="radio" name="pilihan12" value="0.6" required></td>
                        <td><input type="radio" name="pilihan12" value="0.8" required></td>
                        <td><input type="radio" name="pilihan12" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>13. <?= $text13 ?></b></td>
                        <td><input type="radio" name="pilihan13" value="0" required></td>
                        <td><input type="radio" name="pilihan13" value="0.2" required></td>
                        <td><input type="radio" name="pilihan13" value="0.4" required></td>
                        <td><input type="radio" name="pilihan13" value="0.6" required></td>
                        <td><input type="radio" name="pilihan13" value="0.8" required></td>
                        <td><input type="radio" name="pilihan13" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>14. <?= $text14 ?></b></td>
                        <td><input type="radio" name="pilihan14" value="0" required></td>
                        <td><input type="radio" name="pilihan14" value="0.2" required></td>
                        <td><input type="radio" name="pilihan14" value="0.4" required></td>
                        <td><input type="radio" name="pilihan14" value="0.6" required></td>
                        <td><input type="radio" name="pilihan14" value="0.8" required></td>
                        <td><input type="radio" name="pilihan14" value="1" required></td>
                    </tr>
                    <tr>
                        <td><b>15. <?= $text15 ?></b></td>
                        <td><input type="radio" name="pilihan15" value="0" required></td>
                        <td><input type="radio" name="pilihan15" value="0.2" required></td>
                        <td><input type="radio" name="pilihan15" value="0.4" required></td>
                        <td><input type="radio" name="pilihan15" value="0.6" required></td>
                        <td><input type="radio" name="pilihan15" value="0.8" required></td>
                        <td><input type="radio" name="pilihan15" value="1" required></td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-block">
            </div>
        </form>
    </div>
</body>