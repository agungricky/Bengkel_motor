<?php
$sesi = $_SESSION['MEMBER'];
?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php?hal=home"><img src="">Service88</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php?hal=home">Home</a></li>
                <li><a class="nav-link scrollto" href="index.php?hal=about">About</a></li>
                <li><a class="nav-link   scrollto" href="index.php?hal=portofolio">Portfolio</a></li>
                <?php
                if (!isset($sesi)) {    ?>
                    <li><a class="getstarted scrollto" href="form_login.php">Login</a></li>
                <?php
                } else { //berhasil login
                ?>
                    <li class="dropdown"><a href="#"><span>Data</span> <i class="fa fa-angle-down"></i></a>
                        <ul class="">
                            <li><a class="nav-link scrollto" href="index.php?hal=team">Team</a></li>
                            <li><a href="index.php?hal=sperpart">Sperpart</a></li>
                            <li><a href="index.php?hal=Riwayat_transaksi">Riwayat Transaksi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="link-link" href="" data-toggle="dropdown"><?= $sesi['Nama'] ?>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?hal=member">Profile</a></li>

                            <?php
                            if ($sesi['role'] == 'admin') { ?>
                                <li><a href="index.php?hal=member">Kelola User</a></li>
                            <?php } ?>
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="index.php?hal=form_order">Order</a></li>
                <?php
                }
                ?>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->