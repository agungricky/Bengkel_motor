<?php
$id = $_REQUEST['id'];
$model = new Team();
$pegawai = $model->Get_pegawai($id);
?>
<section class="page-title bg-title overlay-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="title">
                    <h3>Details Pegawai</h3>
                </div>
                <ol class="breadcrumb justify-content-center p-0 m-0">
                    <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                    <li class="breadcrumb-item active">Pegawai Details</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--====  End of Page Title  ====-->

<section class="section single-speaker">
    <div class="container">
        <div class="block">
            <div class="row">
                <div class="col-lg-5 col-md-6 align-self-md-center">
                    <div class="image-block">
                        <img src="assets/img/team/<?= $pegawai['Foto'] ?>" class="img-fluid" alt="speaker">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 align-self-center">
                    <div class="content-block">
                        <div class="name">
                            <h3><?= $pegawai['Nama'] ?></h3>
                        </div>
                        <div class="profession">
                            <p><?= $pegawai['Posisi'] ?></p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <ul class="mr-1 p-0">
                                <li>Status : <?= $pegawai['Status'] ?></li>
                                <li>Alamat : <?= $pegawai['Alamat'] ?></li>
                                <li>Umur : <?= $pegawai['Umur'] ?></li>
                                <li>Posisi : <?= $pegawai['Posisi'] ?></li>
                                <li>Pendidikan : <?= $pegawai['Pendidikan'] ?></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>