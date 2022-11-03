<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>ORDER</h2>
            <p>Tentukan sendiri Jam Kedatanganmu Untuk Menyingkat Waktu Kegiatan Yang lain</p>
            <?php

            ?>
        </div>

        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Kediri, JawaTimur 64484</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>Service88@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>081276443311</p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="controler_order.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="Nama" class="form-control" id="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Kunjungan</label>
                            <input type="date" class="form-control" name="Kunjungan" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Plat Nomor</label>
                        <input type="text" class="form-control" name="Plat_Nomor" id="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Keluhan</label>
                        <textarea class="form-control" name="Keluhan" rows="10" name="Keluhan" placeholder="Haloo, Selamat datang. Ada yang Bisa Kami Bantu ......
Mohon Berikan Informasi Merek Motor, Jenis Motor serta Kendala apa yang anda Alami" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit" name="proses" value="simpan">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->