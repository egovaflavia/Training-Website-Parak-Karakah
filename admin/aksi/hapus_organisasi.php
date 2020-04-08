<?php
include("../koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM `tbl_organisasi` WHERE id_org='$id' ");
if ($query) {
    echo
        "<script>
            alert('Data Terhapus');
            window.location='../backup_index.php?page=data_organisasi';
        </script>";
} else {
    echo
        "<script>
            alert('Data Gagal Terhapus');
            window.location='../backup_index.php?page=data_organisasi';
        </script>";
}
