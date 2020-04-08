<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/RumahGadang.jpg')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Pusat Layanan Pengaduan</h2>
                <p>Kelurahan Parak Karakah</p>
                <p>Izin Kereamaian</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <form action="aksi/proses_keramaian.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Nama Kegiatan</label>
                    <input name="nama_keg" type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="fname">Tujuan Kegiatan</label>
                    <input name="tujuan" type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="fname">Waktu Kegiatan</label>
                    <input name="waktu" type="date" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="fname">Tempat Kegiatan</label>
                    <input name="tempat" type="text" id="fname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Indentitas Penanggung Jawab</label>
                    <input name="identitas" type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">No Hp</label>
                    <input name="nohp" type="text" id="tel" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="fname">Jumlah Peserta</label>
                    <input name="jumlah" type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <br>
                    <label for="eaddress">Foto KTP</label>
                    <input name="foto_keg" type="file" id="eaddress">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" name="kirim" value="Send" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </form>
    </div>
</div>