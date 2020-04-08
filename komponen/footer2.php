<div class="section-bg style-1" id="visi" style="background-image: url('images/RumahGadang.jpg');">
    <div class="container">
        <div class="row">
            <?php
            $pilih = mysqli_query($koneksi, "SELECT * FROM `tbl_vimimo` ");
            $data = mysqli_fetch_array($pilih)
            ?>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-school-material"></span>
                <h3>Visi</h3>
                <p><?php echo $data['visi']; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class=" icon flaticon-book"></span>
                <h3>Misi</h3>
                <p><?php echo $data['misi']; ?></p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <span class="icon flaticon-ink"></span>
                <h3>Moto</h3>
                <p><?php echo $data['moto']; ?></p>
            </div>
        </div>
    </div>
</div>