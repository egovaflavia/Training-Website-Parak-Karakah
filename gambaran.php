<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/RumahGadang.jpg')">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <h2 class="mb-0">Gambaran Umum</h2>
        <p>Kelurahan Parak Karakah</p>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-6 mb-lg-12 mb-4">
        <img src="images/Logo_Sumbar.jpg" alt="Image" class="img-fluid"><br>
      </div>
      <div class="col-lg-6 ml-auto align-self-center">
        <h2 class="section-title-underline mb-5">
          <span>Parak Karakah</span>
        </h2>
        <p style="text-align: justify;">Secara umum Kelurahan Parak Karakah memiliki luas 106 ha dengan batas-batas wilayah sebagai berikut:</p>
        <ol class="">
          <li>Utara : Kelurahan Ulak Karang Utara</li>
          <li>Selatan : Kelurahan Lolong Belanti</li>
          <li>Timur : Samudera Hindia</li>
          <li>Barat : Kelurahan Gunung Pangilun</li>
        </ol>
      </div>
      <div class="col-lg-12 mb-lg-12 mb-4">
        <p style="text-align: justify;">Dari segi geografis Kelurahan Parak Karakah terletak pada ketinggian 0-8 M dpl dari permukaan laut dengan suhu rata-rata 31oC.</p>
        <p style="text-align: justify;">Dari segi administrasi pemerintahan, Kelurahan Parak Karakah dibagi atas 13 (tiga belas) Rukun Warga (RW) dan 43 (empat puluh tiga) Rukun Tetangga (RT). Jumlah penduduk hingga akhir Desember 2018 adalah 8741 jiwa, 2185 KK dengan perincian 4357 laki-laki dan 4384 perempuan.</p>
      </div>
    </div>


    <div class="col-lg-12 mr-auto align-self-center order-2 order-lg-1">
      <h4 class="">
        <span>Jumlah Sarana dan Prasarana Pendidikan</span>
      </h4>
      <p>Pendidikan Formal</p>
      <table class="table table-striped table-bordered table-condensed">
        <tr>
          <th>No</th>
          <th>Sarana</th>
          <th>Jumlah</th>
        </tr>
        <?php
        $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_formal WHERE 1");
        $no = 1;
        $total = 0;
        while ($data = mysqli_fetch_array($pilih)) {
          $total = $total + $data['jumlah'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama_formal']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="2" align="center">Total</td>
          <td><?php echo $total ?></td>
        </tr>
      </table>

      <p>Pendidikan Non-Formal</p>
      <table class="table table-striped table-bordered table-condensed">
        <tr>
          <th>No</th>
          <th>Sarana</th>
          <th>Jumlah</th>
        </tr>
        <?php
        $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_nonformal WHERE 1");
        $no = 1;
        $total = 0;
        while ($data = mysqli_fetch_array($pilih)) {
          $total = $total + $data['jumlah'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama_nonformal']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="2" align="center">Total</td>
          <td><?php echo $total ?></td>
        </tr>
      </table>

      <p>Keamanan</p>
      <table class="table table-striped table-bordered table-condensed">
        <tr>
          <th>No</th>
          <th>Sarana</th>
          <th>Jumlah</th>
        </tr>
        <?php
        $pilih = mysqli_query($koneksi, "SELECT * FROM tbl_keamanan WHERE 1");
        $no = 1;
        $total = 0;
        while ($data = mysqli_fetch_array($pilih)) {
          $total = $total + $data['jumlah'];
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama_keamanan']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="2" align="center">Total</td>
          <td><?php echo $total ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>