<?php
include("../koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM `tbl_admin` WHERE id_admin='$id' ");
if ($query) {
    echo
        "<script>
            alert('Data Terhapus');
            window.location='../backup_index.php?page=data_admin';
        </script>";
} else {
    echo
        "<script>
            alert('Data Gagal Terhapus');
            window.location='../backup_index.php?page=data_admin';
        </script>";
}
