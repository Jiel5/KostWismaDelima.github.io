<?php 
session_start();
require 'functions.php';


if ( isset($_POST["submit"]) ) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
                alert('Berhasil');
            </script>";
    } else {
        echo "<script>
                alert('Gagal');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="shortcut icon" href="./img/" type="image/x-icon">
    <link rel="stylesheet" href="css/review.css" />
    <title>Wisma Delima</title>

</head>

<body>

    <!-- Navbar -->

    <div class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand text-info">.Wisma Delima</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu"><span
                    class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#Statics" class="nav-link">Statics</a></li>
                    <li class="nav-item"><a href="#TanyaKami" class="nav-link">Ask Us</a></li>
                    <li class="nav-item"><a href="#AboutUs" class="nav-link">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="linksdrop" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">More</a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="linksdrop">
                            <li><a class="dropdown-item text-muted" href="#Rooms">Rooms</a></li>
                            <li><a class="dropdown-item text-muted" href="#CustomerReview">Review</a></li>
                        </ul>
                    </li>
                </ul>

                <li class="navbar-nav nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="navbar-nav nav-item"><a href="register.php" class="btn btn-outline-info"
                        id="register">Register</a></li>

            </div>
        </div>
    </div>


    <!-- Info -->


    <section class="bg-dark text-light text-center py-5">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h1><span class="text-info">Wisma</span> Delima</h1>
                    <p>Temukan kost terbaik didekat kampusmu!
                        best deal, one click away to finding your kost!</p>
                    <a class="m-2 btn btn-light" href="form/form.html" target="_blank">Booking Sekarang</a>
                </div>
                <img class="img-fluid w-50" src="img/home-blue-red.svg" alt="">
            </div>
        </div>
    </section>


    <!-- Services -->


    <section id="Services" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">
                Services
            </h2>
            <div class="row text-center">
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-info">Free Wifi</h4>
                            <p class="card-text">Fasilitas free WiFi dengan jaringan internet yang bagus tersedia di
                                setiap blok kamar, dapat digunakan untuk mengerjakan tugas dan buka sosmed</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="bi bi-capslock-fill"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-info">Bersih</h4>
                            <p class="card-text">Kamar higienis, ukuran ideal, full furnished, kebersihan lingkungan
                                yang dilakukan secara rutin oleh petugas kebersihan</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card bg-dark text-light mb-3">
                        <div class="h1 mt-3">
                            <i class="bi bi-folder2-open"></i>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-info">Strategis</h4>
                            <p class="card-text">Dekat dengan Universitas Muria Kudus. Cuma 2 menit dari kost, 1km dari
                                IAIN, 1,5km dari Simpang 7 Kudus serta dekat tempat nongki, penjual makanan dan
                                minimarket.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Statics -->


    <section id="Statics" class="py-5 bg-dark text-light">
        <div class="container">
            <div class="py-2 text-center">
                <h2>Statics:</h2>
            </div>
            <div class="row align-items-center justify-content-center text-center -5">
                <div class="col">
                    <img src="./img/house.svg" alt="" class="img-fluid d-none d-md-block">
                </div>
                <div class="col-sm p-5 h1">
                    <i class="bi bi-hdd-stack text-primary"></i>
                    <h5>30+</h5>
                    <h5>Kamar</h5>
                </div>
                <div class="col-sm p-5 h1">
                    <i class="bi bi bi-people-fill text-primary"></i>
                    <h5>70+</h5>
                    <h5>Penyewa</h5>
                </div>
                <div class="col-sm p-5 h1">
                    <i class="bi bi bi-hash text-primary"></i>
                    <h5>4+</h5>
                    <h5>Fasilitas pendukung</h5>
                </div>
            </div>

        </div>
    </section>


    <!-- FAQ -->

    <section id="AboutUs" class="py-5">
        <div class="container">
            <h2 class="text-center mb-3">
                About Us
            </h2>
            <div class="accordion accordion-flush" id="your-faq">
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer-1">
                            Lokasi
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse p-3" id="answer-1" data-bs-parent="#your-faq">
                        <p>Jl.Lkr. Utara,kayuapu kulon,Gondangmanis, kec.Bae,Kab.Kudus</p>
                        <p>Penjaga kost Wisma Putri, Bapak Nur</p>

                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer-2">
                            Tata Tertib
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse p-3" id="answer-2" data-bs-parent="#your-faq">
<p>Demi keamanan dan kenyaman bersama, pengelola kost wisma delima membuat  tata tertib yang wajib di taati oleh seluruh penghuni ,sbb:</p>
<p>1. jam buka kost wisma delima di mulai jam 6.00 - 21.00 wib. Diluar jam tersebut wajib lapor pengelola kost.</p>
<p>2. kendaraan berupa mobil dan motor penghuni kost di parkir di tempat yang sudah disediakan di dalam atau di halaman yang masuk area kost wisma delima.</p>
<p>3. Tamu laki laki hanya diperkenankan berkunjung di teras rumah kost dan dilarang keras masuk ke dalam rumah kost wisma delima.</p>
<p>4. Tamu perempuan atau keluarga yang berkunjung dan bermaksud untuk menginap, wajib melapor dan meminta izin kepada pengelola kost wisma delima.</p>
<p>5. Kompor, lampu, kran air, tv, kipas angin dan peralatan elektronik lain wajib di matikan saat tidak digunakan.</p>
<p>6. Selalu menjaga kebersihan dan ketertiban lingkungan. Note : dilarang membuang pembalut dan sampah lainnya di luang wc!</p>
<p>7. Untuk penghuni kost yang membawa peralatan elektronik tambahan, dikenakan biaya tambahan per bulan,sbb:</p>
<p>- setrika Rp 25.000</p>
<p>- kipas angin Rp 30.000</p>
<p>- rice cooker Rp 30.000</p>
<p>Note : dilarang membawa kumparan pemanas seperti teko listrik!</p>
<p>8. Ketentuan pembayaran kost wisma delima,sbb:</p>
<p>- pembayaran biaya kost dilakukan setiap periode 3 bulan atau lebih</p>
<p>- batas waktu pembayaran maksimal tanggal 10 pada setiap periodenya.
Di luar ketentuan tersebut, wajib memberitahu untuk meminta persetujuan dari pengelola kost.</p>
<p>- pembayaran tersebut di anggap sah jika ada tanda terima berupa kwitansi berstempel dari pengelola kost wisma delima atau dengan bukti slip transfer.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <h5 class="accordion-header" id="qusetion-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#answer-3">
                            Fasilitas Pendukung
                        </button>
                    </h5>
                    <div class="accordion-collapse collapse p-3" id="answer-3" data-bs-parent="#your-faq">
                        <p>Dapur bersama tiap blok</p>
                        <p>Kamar mandi tiap blok</p>
                        <p>Parkiran</p>
                        <p>Ruang tamu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->

    <section id="Rooms" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Rooms</h2>
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="text-light">
                        <div class="card bg-dark" style="width: 35rem; height: 35rem">
                            <img src="img/IMG20221025163816.jpg" class="card-img-top" alt="..." />
                            <div class="card-body text-center">
                                <h4 class="card-title text-center">Private</h4>
                                <h5 class="card-title text-center">Rp 700 000</h5>
<br><br>                                
                                <p>Fasilitas :</p>
                                <p class="card-text">Free WIFI, 1 Kasur, 1 Almari, meja dan kursi</p>
                                <a class="m-2 btn btn-light" href="form/form.html" target="_blank">Booking Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-light">
                        <div class="card bg-dark" style="width: 35rem; height: 35rem">
                            <img src="img/IMG20221028050935.jpg" class="card-img-top" alt="..." />
                            <div class="card-body text-center">
                                <h4 class="card-title text-center">Ekonomis</h4>
                                <h5 class="card-title text-center">Rp 450 000</h5>
<br><br>                               
                                <p>Fasilitas :</p>
                                <p class="card-text">Free WIFI, 2 Kasur, 1 Almari, meja dan kursi</p>
                                <a class="m-2 btn btn-light" href="form/form.html" target="_blank">Booking Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Form to Email -->

    <section id="TanyaKami" class="py-5 bg-dark text-light">
        <div class="container col-md-6">
            <h2 class="text-center mb-3">
                Tanya Kami
            </h2>
            <form method="post" action="">
                <div class="py-2 text-left">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pertanyaan</label>
                        <textarea type="pertanyaan" class="form-control" name="pertanyaan"
                            id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div align="center" class="submit-btn">

                        <button class="m-2 btn btn-light" type="submit" name="submit" href="index.php">Kirim Pertanyaan
                            saya</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Review -->

    <section id="CustomerReview" class="py-5">
        <div class="container">
            <div class="hero">
                <h1>Customer Review</h1>
                <div class="review-box">
                    <div id="slide">
                        <div class="card">
                            <div class="profile">
                                <img src="img/profile.svg" alt="" />
                                <div>
                                    <h3>Chotim Surya</h3>
                                    <p>Penghuni Kost</p>
                                </div>
                            </div>
                            <p>
                                Kostan bersih, nyaman lingkungan aman, halaman luas asri seperti tinggal di rumah
                                sendiri👍
                            </p>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <img src="img/profile.svg" alt="" />
                                <div>
                                    <h3>Sri Lestari</h3>
                                    <p>Penghuni Kost</p>
                                </div>
                            </div>
                            <p>
                                Deket banget dari UMK & Alun-alun Kudus, kamar bersih, nyaman, kalau mau cari makan atau
                                camilan juga mudah, penjaga sama petugas kebersihannya ramah, pokoknya recommended deh👍
                            </p>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <img src="img/profile.svg" alt="" />
                                <div>
                                    <h3>Shabrina</h3>
                                    <p>Pengunjung</p>
                                </div>
                            </div>
                            <p>
                                Tempatnya nyaman, wifinya kencang fasilitasnya OK banget
                                Penjaga kost ramah, fasilitas dan kamar oke lah untuk harga segitu udah ada wifi sama
                                ada petugas kebersihannya
                            </p>
                        </div>
                        <div class="card">
                            <div class="profile">
                                <img src="img/profile.svg" alt="" />
                                <div>
                                    <h3>Jihan</h3>
                                    <p>Pengunjung</p>
                                </div>
                            </div>
                            <p>
                                Kostan nyaman harga aman
                            </p>
                        </div>
                    </div>

                    <div class="sidebar">
                        <img src="images/up-arrow.png" alt="" id="upArrow" />
                        <img src="images/down-arrow.png" alt="" id="downArrow" />
                    </div>
                </div>
            </div>

            <script>
            const slide = document.getElementById("slide");
            const upArrow = document.getElementById("upArrow");
            const downArrow = document.getElementById("downArrow");

            let x = 0;
            upArrow.onclick = function() {
                if (x > "-900") {
                    x = x - 300;
                    slide.style.top = x + "px";
                }
            };

            downArrow.onclick = function() {
                if (x < "0") {
                    x = x + 300;
                    slide.style.top = x + "px";
                }
            };
            </script>
        </div>
    </section>

    <!-- footer -->

    <div class="footer-clean bg-dark">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Quick access</h3>
                    <ul>
                        <li><a href="#Services">Services</a></li>
                        <li><a href="#Statics">Statics</a></li>
                        <li><a href="#TanyaKami">Ask Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#AboutUs">About Us</a></li>
                        <li><a href="#Rooms">Rooms</a></li>
                        <li><a href="#CustomerReview">Customer Review</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 item social"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a><a href="#"><ion-icon name="logo-instagram"></ion-icon></a>

                </div>
            </div>
        </div>
        <div class="page-footer font-small text-light mt-5">
        <div class="footer-copyright text-center">Made by
            <a#s href="https://github.com/Hadi-koubeissi/">Kelompok 5</a>
            © 2022 Copyright
          </div>
        </div>
    </footer>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>