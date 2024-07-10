<?php
# 1
include 'config/koneksi.php';
# 2
if(isset($_POST['submit'])){
    # 3
    session_start();
    # 4
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    # 5
    $pass = mysqli_real_escape_string($koneksi, $_POST['password']);
    # 6
    $cek = mysqli_query($koneksi, " SELECT * FROM user_form WHERE email = '".$email."' && password = '".MD5($pass)."' ");
    # 7
    if(mysqli_num_rows($cek) > 0){
        # 8
        $d = mysqli_fetch_object($cek);
        # 9
        $_SESSION['user_name'] = true;
        # 10
        $_SESSION['a_global'] = $d;
        # 11
        $_SESSION['id'] = $d->id;
        # 12
        echo '<script>window.location="user_page.php"</script>';
    # 13
    }else{
        # 14
        echo '<script>alert("Email atau sandi salah!")</script>';
    }
};
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
                        <a class = "nav-link text-uppercase text-dark" href = "index.html">home</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "about.html">About</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "produk.html">Produk</a>
                    </li>
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="keranjang.html">keranjang</a>
                    </li> 
                    <li class="nav-item px-2 py-2">
                        <a class="nav-link text-uppercase text-dark" href="riwayat.html">Riwayat</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "login_form.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->


    <!-- popular -->
    <section id = "login" class = "py-5">
        <div class = "container">
            <!-- ================ Login ================= -->
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>login form</title>
                <!-- custom css file link  -->
                <link rel="stylesheet" href="assets/css/logris.css">
                </head>
                <body>
                <div class="form-container">

                <form action="" method="post">
                    <h3>login now</h3>
                    <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                    ?>
                    <input type="email" name="email" required placeholder="masukkan email">
                    <input type="password" name="password" required placeholder="masukkan password">
                    <img src="captcha.php" alt="gambar"/>
                    <input type="captcha" name="captcha"required placeholder="enter your captcha">
                    <input type="submit" name="submit" value="login now" class="form-btn">
                    <p>tidak punya akun? <a href="register_form.php">register now</a></p>
                </form>

                </div>
            </div>
        </div>
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

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

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