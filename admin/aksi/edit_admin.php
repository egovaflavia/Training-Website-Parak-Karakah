<section class="p-t-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Data Admin | <strong>Masukan Dengan Benar</strong> Data Anda
                    </div>
                    <div class="card-body card-block">
                        <?php
                        include("./koneksi.php");
                        $id = $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM `tbl_admin` WHERE id_admin=$id ");
                        ?>
                        <form action="" method="POST">
                            <?php while ($data = mysqli_fetch_array($query)) { ?>
                                <div class="form-group">
                                    <label class=" form-control-label">Nama Admin</label>
                                    <input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">
                                    <input type="text" name="nama_admin" value="<?php echo $data['nama_admin']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Username</label>
                                    <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Password</label>
                                    <input type="password" name="password" value="<?php echo $data['password']; ?>" class="form-control">
                                </div>
                                <button type="submit" name="edit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-check"></i> Simpan
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include("./koneksi.php");
if (isset($_POST['edit'])) {
    $query = mysqli_query($koneksi, "UPDATE `tbl_admin` SET `nama_admin`='$_POST[nama_admin]',`username`='$_POST[username]',`password`='$_POST[password]' WHERE `id_admin`= '$_POST[id_admin]'");
    if ($query) {
        echo "<script>
    alert('Data Tersimpan');
    window.location='backup_index.php?page=data_admin';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='backup_index.php?page=data_admin';
    </script>";
    }
}
