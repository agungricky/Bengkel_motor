<?php
$id = $_REQUEST['id'];
$model = new Team();
$pegawai = $model->Get_pegawai($id);
?>
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Detail Pegawai</h2>
            <p>Hallo Perkenalkan Saya</p>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/team/<?= $pegawai['Foto'] ?>" class="img-fluid" alt="">
                    </div>
                    <div class="back" style="position: absolute; margin-left: 90%;">
                        <a href="index.php?hal=team" class="btn btn-primary" title="back">
                            <i class="fa fa-hand-o-left" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="member-info">
                        <h3><?= $pegawai['Nama'] ?></h3>
                        <span>Posisi : <?= $pegawai['Posisi'] ?></span>
                        <span>Status : <?= $pegawai['Status'] ?></span>
                        <span>Alamat : <?= $pegawai['Alamat'] ?></span>
                        <span>Umur : <?= $pegawai['Umur'] ?></span>
                        <span>Posisi : <?= $pegawai['Posisi'] ?></span>
                        <span>Pendidikan : <?= $pegawai['Pendidikan'] ?></span>
                        <p class="my-2 p-2 bg-warning"><?= $pegawai['Motivasi'] ?></p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Team Section -->