<?php
include("../koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM `tbl_prestasi` WHERE id_prestasi='$id' ");
if ($query) {
    echo
        "<script>
            alert('Data Terhapus');
            window.location='../backup_index.php?page=data_prestasi';
        </script>";
} else {
    echo
        "<script>
            alert('Data Gagal Terhapus');
            window.location='../backup_index.php?page=data_prestasi';
        </script>";
}
