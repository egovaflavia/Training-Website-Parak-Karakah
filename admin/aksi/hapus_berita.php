<?php
include("../koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM `tbl_berita` WHERE id_berita=$id");
if ($query) {
    echo
        "<script>
            alert('Data Terhapus');
            window.location='../backup_index.php?page=data_berita';
        </script>";
} else {
    echo
        "<script>
            alert('Data Gagal Terhapus');
            window.location='../backup_index.php?page=data_berita';
        </script>";
}
