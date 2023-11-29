<?php $active_page = basename($_SERVER['PHP_SELF']); ?>
<div class="col-md-3" id="content">
    <div class="list-group mt-5">
        <a href="index.php" class="list-group-item list-group-item-action <?php echo $active_page == 'index.php' ? 'active' : '' ?>">BERANDA</a>
        <a href="datapengguna.php" class="list-group-item list-group-item-action <?php echo $active_page == 'datapengguna.php' ? 'active' : '' ?>">DATA PENGGUNA</a>
        <a href="datakerusakan.php" class="list-group-item list-group-item-action <?php echo $active_page == 'datakerusakan.php' ? 'active' : '' ?>">DATA KERUSAKAN</a>
        <a href="datagejala.php" class="list-group-item list-group-item-action <?php echo $active_page == 'datagejala.php' ? 'active' : '' ?>">DATA GEJALA</a>
        <a href="basispengetahuan.php" class="list-group-item list-group-item-action <?php echo $active_page == 'basispengetahuan.php' ? 'active' : '' ?>">BASIS PENGETAHUAN</a>
        <hr style="width:100%;text-align:left;margin-left:0">
        <a href="hasilkonsultasi.php" class="list-group-item list-group-item-action <?php echo $active_page == 'hasilkonsultasi.php' ? 'active' : '' ?>">HASIL KONSULSTASI</a>
    </div>
</div>
<!-- <script>
    // Membuat objek XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Menangkap klik pada elemen dengan class .list-group-item
    document.querySelectorAll(".list-group-item").forEach(function(item) {
        item.addEventListener("click", function(event) {
            // Mengambil nilai atribut href dari elemen tersebut
            var url = this.getAttribute("href");
            // Mengirim permintaan GET ke server dengan url tersebut
            xhr.open("GET", url, true);
            xhr.send();
            // Mencegah halaman berpindah ke url tersebut
            event.preventDefault();
        });
    });

    // Menangani respons dari server
    xhr.onreadystatechange = function() {
        // Jika permintaan selesai dan berhasil
        if (this.readyState == 4 && this.status == 200) {
            // Memuat konten HTML dari server ke dalam elemen dengan id #content
            document.getElementById("content").innerHTML = this.responseText;
        }
    };
</script> -->