<?php $active_page = basename($_SERVER['PHP_SELF']);?>
<div class="col-md-3">
    <div class="list-group mt-5">
        <!-- Membandingkan url dengan index.php -->
        <a href="index.php" class="list-group-item list-group-item-action <?php echo $active_page == 'index.php' ? 'active' : '' ?>">BERANDA</a>
        <!-- Membandingkan url dengan datapengguna.php -->
        <a href="datapengguna.php" class="list-group-item list-group-item-action <?php echo $active_page == 'datapengguna.php' ? 'active' : '' ?>">DATA PENGGUNA</a>
        <!-- Membandingkan url dengan datakerusakan.php -->
        <a href="datakerusakan.php" class="list-group-item list-group-item-action <?php echo $active_page == 'datakerusakan.php' ? 'active' : '' ?>">DATA KERUSAKAN</a>
        <!-- Membandingkan url dengan datagejala.php -->
        <a href="datagejala.php" class="list-group-item list-group-item-action <?php echo $active_page == 'datagejala.php' ? 'active' : '' ?>">DATA GEJALA</a>
        <!-- Membandingkan url dengan basispengetahuan.php -->
        <a href="basispengetahuan.php" class="list-group-item list-group-item-action <?php echo $active_page == 'basispengetahuan.php' ? 'active' : '' ?>">BASIS PENGETAHUAN</a>
        <hr style="width:100%;text-align:left;margin-left:0">
        <!-- Membandingkan url dengan hasilkonsultasi.php -->
        <a href="hasilkonsultasi.php" class="list-group-item list-group-item-action <?php echo $active_page == 'hasilkonsultasi.php' ? 'active' : '' ?>">HASIL KONSULSTASI</a>
    </div>
</div>