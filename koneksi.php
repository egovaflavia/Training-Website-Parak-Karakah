<?php
$koneksi = mysqli_connect("localhost", "root", "mysql", "db_lurah");
// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}