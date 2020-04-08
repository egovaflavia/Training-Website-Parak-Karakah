<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/RumahGadang.jpg')">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <h2 class="mb-0">Hubungi Admin Melalui Email</h2>
                <p>Kelurahan Parak Karakah</p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <form action="aksi/send_mail.php" method="POST">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="fname">Nama</label>
                    <input name="name" type="text" id="fname" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="eaddress">Email</label>
                    <input name="email" type="email" id="eaddress" class="form-control form-control-lg">
                </div>
                <div class="col-md-6 form-group">
                    <label for="tel">Subject</label>
                    <input name="subject" type="text" id="tel" class="form-control form-control-lg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Send Mail" class="btn btn-primary btn-lg px-5">
                </div>
            </div>
        </form>
    </div>
</div>