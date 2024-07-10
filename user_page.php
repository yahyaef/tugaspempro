<?php
@include 'config/koneksi.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Almazz</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel = "stylesheet" href = "bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
</head>
<body>
    
    <!-- navbar -->
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.html">
                <img src = "img/logo.png" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2">Kedai Almazz</span>
            </a>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "user/home.html" >home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "user/about.html">About</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "user/produk.html">Produk</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "user/keranjang.html">Keranjang</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "user/riwayat.html">Riwayat</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- header -->
    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
    </header>
    <!-- end of header -->

    <!-- about us -->
    <section id = "about" class = "py-5">
        <div class = "container">
            <div class = "row gy-lg-5 align-items-center">
                <div class = "col-lg-6 order-lg-1 text-center text-lg-start">
                    <div class = "title pt-3 pb-5">
                        <h2 class = "position-relative d-inline-block ms-4">About</h2>
                    </div>
                    <p class = "lead text-muted">Selamat datang di Kedai Almazz Official</p>
                    <p>Destinasi utama Anda untuk fashion yang stylish dan berkualitas. Kami berdedikasi untuk memberikan Anda pengalaman berbelanja yang menyenangkan dengan menawarkan produk-produk yang tidak hanya trendi, tetapi juga nyaman dan terjangkau.</p>
                </div>
                <div class = "col-lg-6 order-lg-0">
                    <img src = "img/logo.png" alt = "" class = "img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- end of about us -->

    <!-- popular -->
    <section id = "popular" class = "py-5">
        <div class = "container">
            <!-- beli beli -->
	<div class='gambar'>

        <div class='foto'>
            <img src='img/t-shirt.jpeg'>
            <h2>California T-Shirt</h2>
            <p>Rp. 120.000.00</p> <br>
            <a href=''>Buy Now</a>
        </div>
    
        <div class='foto'>
                <img src='img/coach.jpeg'>
                <h2>COACH JACKET COVER TAPED</h2>
                <p>Rp. 375.000.00</p> <br>
                <a href=''>Buy Now</a>
            </div>
    
            <div class='foto'>
                    <img src='img/long.jpeg'>
                    <h2>LONGSLEEVE</h2>
                    <p>Rp. 180.000.00</p> <br>
                    <a href=''>Buy Now</a>
                </div>
    
                <div class='foto'>
                        <img src='img/kanjani.jpeg'>
                        <h2>KANJANI EIGHT</h2>
                        <p>Rp. 120.000.00</p><br>
                        <a href=''>Buy Now</a>
                    </div>
    
                    <div class='foto'>
                            <img src='img/just.jpeg'>
                            <h2>NIKE JUST DO IT</h2>
                            <p>Rp. 120.000.00</p><br>
                            <a href=''>Buy Now</a>
                        </div>
    
                        <div class='foto'>
                                <img src='img/chicago.jpeg'>
                                <h2>CHICAGO LONGSLEEVE</h2>
                                <p>Rp. 375.000.00</p><br>
                                <a href=''>Buy Now</a>
                            </div>
    
                            <div class='foto'>
                                    <img src='img/taped.jpeg'>
                                    <h2>COACH JACKET COVER TAPED</h2>
                                    <p>Rp. 180.000.00</p><br>
                                    <a href=''>Buy Now</a>
                                </div>
    
                                <div class='foto'>
                                        <img src='img/print.jpeg'>
                                        <h2>NIKE ALL OVER PRINT</h2>
                                        <p>RP. 120.000.00</p><br>
                                        <a href=''>Buy Now</a>
                                    </div><br><br><br><br><br><br>
        </div>
        </div>
    </section>
    <!-- end of popular -->

    <!-- footer -->
    <footer class = "bg-dark py-5">
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <a class = "text-uppercase text-decoration-none brand text-white" href = "index.html">Attire</a>
                    <p class = "text-white text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum mollitia quisquam veniam odit cupiditate, ullam aut voluptas velit dolor ipsam?</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">Links</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Home
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Collection
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> Blogs
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> About Us
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Contact Us</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <span class = "fw-light">
                            Albert Street, New York, AS 756, United States of America
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span class = "fw-light">
                            attire.support@gmail.com
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span class = "fw-light">
                            +9786 6776 236
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">Follow Us</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->




    <!-- jquery -->
    <script src = "js/jquery-3.6.0.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <!-- bootstrap js -->
    <script src = "bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>