<section class="py-5 bg-cover bg-gray">
    <div class="container py-5">
        <h1 class="lined">Adopsi</h1>
        <p class="lead my-4">MIAU CARE JOGJA ADOPTION FORM</p>
        <p class="lead my-4">Jika anda ingin melakukan adopsi, isi formulir persyaratan dan formulir adopsi dibawah!</p>
    </div>
</section>

<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-map-2"></i></div>
                        <h5 class="lined mb-4">Alamat</h5>
                        <p class="text-muted mb-0 text-small">MIAU CARE, <strong> Jogja </strong></p>
                    </div>

                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-mail-open"></i></div>
                        <h5 class="lined mb-4">Formulir Persyaratan</h5>
                        <p class="text-muted mb-3 text-small">Formulir Persyaratan Adopsi:</p>
                        <ul>
                            <li><a href="#" class="font-weight-bold text-small">https://form.jotform.com/231481970801455</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ml-auto">
                <div class="col-lg-12 col-md-6 mb-4">
                    <div class="icon mb-4"><i class="pe-7s-pen"></i></div>
                    <?php
                    if (isset($_GET['msg'])) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $_GET['msg'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                         </div>';
                    } ?>
                    <h5 class="lined mb-4">Formulir Adopsi</h5>
                    <p class="text-muted text-small">Isi setiap.</p>
                    <form id="contact-form" method="post" action="" class="contact-form form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="name" class="font-weight-normal">Nama Depan</label>
                                <input id="name" type="text" name="f_firstname" class="form-control" value="<?= isset($_SESSION['v_firstname']) ? $_SESSION['v_firstname']  : "" ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="surname" class="font-weight-normal">Nama Belakang </label>
                                <input id="surname" type="text" name="f_lastname" class="form-control" value="<?= isset($_SESSION['v_lastname']) ? $_SESSION['v_lastname']  : "" ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email" class="font-weight-normal">Email</label>
                                <input id="email" type="email" name="f_email" class="form-control" value="<?= isset($_SESSION['v_email']) ? $_SESSION['v_email']  : "" ?>" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="subject" class="font-weight-normal">Subjek</label>
                                <input id="subject" type="text" name="f_subject" class="form-control" required>
                                <small class="text-muted">contoh: mau adopsi kucing</small>

                            </div>
                            <div class="form-group col-lg-12">
                                <label for="message" class="font-weight-normal">Kode Booking</label>
                                <textarea id="message" rows="4" name="f_message" class="form-control" required></textarea>
                                <small class="text-muted">*kode booking ada di halaman kucing pada website ini</small>
                            </div>
                            <div class="form-group col-lg-12">
                                <?php if (isset($_SESSION['authenticated'])) { ?>
                                    <button type="submit" class="btn btn-outline-primary" name="submit"> <i class="far fa-envelope mr-2"> </i>Kirim Pesan</button>
                                <?php } else { ?>
                                    <button class="btn btn-outline-danger" disabled>Anda harus login sebelum mengisi!</button>
                                <?php } ?>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col">
        <iframe src="https://www.google.com/maps/d/embed?mid=1gUfWZZG5fbuouINs-NBxQ0J2k0E&hl=en_US&ehbc=2E312F" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
<!-- <script src="vendor/lightbox2/js/lightbox.min.js"></script> -->
<!-- <script src="vendor/leaflet/leaflet.js"></script> -->
<!-- <script src="js/front.js"></script> -->