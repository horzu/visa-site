<!DOCTYPE html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/fontawesome.css" rel="stylesheet" />
    <link href="assets/css/chosen.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/jquery-ui/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <title>Re-vize - Profesyonel Vize Hizmetleri</title>
</head>

<body>
    <!-- Navbar  -->
    <navbar>
        <nav class="navbar navbar-expand-lg navbar-dark bg-color py-4" id="topnavbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/revizeLogo.svg" alt="" class="image-responsive" />
                </a>

                <div class="d-flex align-items-center justify-content-center">


                    <div class="mobile-search dropdown position-static me-2 d-lg-none">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-search text-white m-0"></i>
                        </a>

                        <?php include "dropdown-arama.php" ?>

                    </div>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTopContent" aria-controls="navbarTopContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbarTopContent">
                    <div class="navbar-seperate">
                        <ul class="navbar-nav me-4 mb-2 mb-lg-0" id="navbar-social">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li class="nav-item search dropdown position-static">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-search"></i>
                                </a>

                                <?php include "dropdown-arama.php" ?>

                            </li>
                        </ul>
                        <ul class="navbar-nav me-4 mb-2 mb-lg-0" id="navbar-info">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kurumsal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Faydalı Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ofislerimiz</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-box" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="contact-box-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="contact-box-text">
                        <p class="contact-box-name">Çözüm Merkezi</p>
                        <p class="contact-box-info">0312 418 5 419</p>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top" id="bottomnavbar">
            <div class="container">
                <div class="navbar-collapse" id="navbarNav">
                    <div data-bs-toggle="modal" data-bs-target="#sidebarModal">
                        <a id="dropdownhamburger"><i class="fas fa-bars" aria-hidden="true"></i>Tüm Ülke
                            Vizeleri</a>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shengen Vizesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Aile Birleşimi Vizesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">İş Arama Vizesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Çalışma Vizesi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Almanya Vizesi</a>
                        </li>
                    </ul>
                    <div class="dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Online İşlemler <i class="fas fa-chevron-down ms-2"></i>
                        </a>

                        <?php include "dropdown-onlineislemler.php" ?>
                    </div>
                </div>
            </div>
        </nav>
    </navbar>