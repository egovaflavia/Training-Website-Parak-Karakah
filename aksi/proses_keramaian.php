<?php
include("../koneksi.php");
if (isset($_POST['kirim'])) {
    $nama_foto = $_FILES['foto_keg']['name'];
    $lokasi_foto = $_FILES['foto_keg']['tmp_name'];
    $tipe_foto = $_FILES['foto_keg']['type'];

    if ($lokasi_foto == "") {
        $query = "INSERT INTO `tbl_keramaian`(`nama_keg`, `waktu`, `tempat`, `identitas`, `nohp`, `jumlah`) VALUES ('$_POST[nama_keg]','$_POST[waktu]','$_POST[tempat]','$_POST[identitas]','$_POST[nohp]','$_POST[jumlah]')";
        $proses = mysqli_query($koneksi, $query);
    } else {
        move_uploaded_file($lokasi_foto, "../images/$nama_foto");
        $query = "INSERT INTO `tbl_keramaian`(`nama_keg`, `waktu`, `tempat`, `identitas`, `nohp`, `jumlah`, `foto_keg`) VALUES ('$_POST[nama_keg]','$_POST[waktu]','$_POST[tempat]','$_POST[identitas]','$_POST[nohp]','$_POST[jumlah]','$nama_foto')";
        $proses = mysqli_query($koneksi, $query);
    }

    if ($proses) {
        echo "<script>
    alert('Data Terkirim');
    window.location='../index.php?page=keramaian';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Terkirim');
    window.location='../index.php?page=keramaian';
    </script>";
    }
}
