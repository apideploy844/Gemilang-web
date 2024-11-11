<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GEMILANG CAFE & SAUNG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

    <body>

        <!-- Spinner Start -->
       
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4"> 
                    <img src="assets/img/banner/icon-gemilang.png" alt="Gemilang Logo" class="me-2" style="height: 90px;">
                    <h1 class="text-primary fw-bold mb-0">
                        <span class="d-block">Gemilang</span>
                        <span class="text-dark d-block" style="font-size: 0.8em;">Cafe & Saung</span>
                    </h1>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/service" class="nav-item nav-link">Services</a>
                            <a href="/menu" class="nav-item nav-link">Menu</a>
                            <a href="/booking" class="nav-item nav-link">Booking</a>
                            <a href="/contact" class="nav-item nav-link active">Contact</a>
                                </div>
                            </div>
                            <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                            <a href="/login" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Login</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid py-6 my-6 mt-0" style="background-image: url('assets/img/banner/banner-gemilang.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="container text-center animated bounceInDown" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 10px;">
                <h1 class="display-1 mb-4">Contact</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="p-5 bg-light rounded contact-form">
                    <div class="row g-4">
                        <div class="col-12">
                            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                            <h1>HUBUNGI KAMI JIKA</h1>
                            <h2>ADA PERMASALAHAN!</h2>
                        </div>
                        
                        <!-- Formulir Kontak -->
                        <div class="col-md-6 col-lg-7">
                            <p class="mb-4">Isi informasi pemesanan Anda, kami akan merespon secepatnya.</p>
                            <form id="contactForm">
                                <input type="text" id="name" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Nama Anda" required>
                                <input type="text" id="contact" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Email atau Nomor WA" required>
                                <textarea id="message" class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Pesan atau masukan" required></textarea>
                                
                                <!-- Tombol Pengiriman -->
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-success form-control me-2 p-3 border-primary bg-success rounded-pill" onclick="sendToWhatsApp()">Kirim via WhatsApp</button>
                                    <button type="button" class="btn btn-primary form-control ms-2 p-3 border-primary bg-primary rounded-pill" onclick="sendToEmail()">Kirim via Email</button>
                                </div>
                            </form>
                        </div>
                        
                        <!-- Informasi Kontak -->
                        <div class="col-md-6 col-lg-5">
                            <div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Alamat</h4>
                                        <p>Jl. Raya Sindang, Sawah, Pagiyanten, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah, 52451</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-2">gemilang@gmail.com</p>
                                    </div>
                                </div>
                                <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-2">089517277732</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <script>
        function sendToWhatsApp() {
            const name = document.getElementById('name').value;
            const message = document.getElementById('message').value;
            const whatsappNumber = "6289517277732";
            const whatsappLink = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(`Halo, saya ${name}. ${message}`)}`;
            window.open(whatsappLink, '_blank');
        }

        function sendToEmail() {
            const name = document.getElementById('name').value;
            const message = document.getElementById('message').value;
            const emailAddress = "gemilang@gmail.com";
            const subject = `Pesan dari ${name}`;
            const mailtoLink = `mailto:${emailAddress}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;
            window.location.href = mailtoLink;
        }
        </script>

        <!-- END ABOUT ALL -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h1 class="text-primary">Gemilang<h1>
                            <h2 class="text-dark">Cafe & Saung</h2>
                            <p class="lh-lg mb-4">Cafe & Saung Gemilang, tempat nyaman menikmati hidangan lezat dengan sentuhan lokal di tengah asri alam. Hadirkan kehangatan dan cita rasa istimewa di setiap momen bersama.</p>
                            <div class="footer-icon d-flex">
                               <!-- <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a> -->
                               <!-- <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>-->
                              
                                                    <!-- Tombol Instagram -->
                            <a href="https://instagram.com/_gemilangtegal" target="_blank" class="btn custom-color btn-sm-square me-2 rounded-circle">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <!-- Tombol WhatsApp -->
                            <a href="https://wa.me/628917277732" target="_blank" class="btn custom-color btn-sm-square me-2 rounded-circle">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                            <style>
                                .custom-color {
                                    background-color: #c6a475 !important;
                                    border-color: #c6a475 !important;
                                    color: #ffffff !important;
                                }
                                .custom-color:hover {
                                    background-color: #b08a65 !important; /* Warna sedikit lebih gelap untuk efek hover */
                                    border-color: #b08a65 !important;
                                }
                            </style>

                                <!--<a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>-->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Waktu Buka</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p>- Senin  : 08.00 - 22.00</p>
                                <p>- Selasa : 08.00 - 22.00</p>
                                <p>- Rabu   : 08.00 - 22.00</p>
                                <p>- Kamis  : 08.00 - 22.00</p>
                                <p>- Jumat  : 08.00 - 22.00</p>
                                <p>- Sabtu  : 08.00 - 22.00</p>
                                <p>- Minggu : 08.00 - 22.00</p>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="mb-4">Hubungi Kami</h4>
                            <div class="d-flex flex-column align-items-start">
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Jl. Raya Sindang, Sawah, Pagiyanten, Kec. Adiwerna, Kabupaten Tegal, Jawa Tengah,52451</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i> +6289517277732</p>
                                <p><i class="fas fa-envelope text-primary me-2"></i> gemilang@gmail.com</p>
                                <p><i class="fab fa-instagram text-primary me-2"></i> @gemilang</p>                                  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mx-auto">
                        <div class="ftco-footer-widget mb-4">
                          <h2 class="ftco-heading-2">Lokasi</h2>
                          <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.078446654124!2d109.104365!3d-6.947866!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb90025f0e2f1%3A0xfcd9eb9d25e3dcde!2sCafe%20%26%20Saung%20Gemilang!5e0!3m2!1sid!2sid!4v1729888246867!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map-iframe"></iframe>
                                </div>
                             </div>
                          </div>
                        </div>      
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <span class="text-light">
                            <a href="#" class="text-light">
                                <i class="fas fa-copyright text-light me-2"></i>Gemilang Cafe & Saung
                            </a>, All rights reserved.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>