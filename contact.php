<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/RumahGadang.jpg')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Pusat Layanan Pengaduan</h2>
                <p>Kelurahan Parak Karakah</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <form action="aksi/proses_komentar.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="fname">Nama</label>
                    <input name="nama_komentar" type="text" id="fname" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email</label>
                    <input name="email" type="email" id="eaddress" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="tel">No Hp</label>
                    <input name="nohp" type="text" id="tel" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <br>
                    <label for="eaddress">Foto</label>
                    <input name="foto" type="file" id="eaddress">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label>Komentar</label>
                    <textarea name="komentar" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" name="kirim" value="Send Message" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </form>
    </div>
</div>