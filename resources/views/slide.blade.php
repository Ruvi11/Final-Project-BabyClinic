<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <title>One Health - Medical Center HTML5 Template</title>
    <link rel="stylesheet" href="../assets/css/maicons.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<style>
    .table-custom {
        width: 100%;
        border-collapse: collapse;
        margin: 15px 0;
        font-size: 14px;
    }

    .table-custom th,
    .table-custom td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table-custom th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table-custom td a {
        color: #007bff;
        text-decoration: none;
    }

    .table-custom td a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Step</span>-Child</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/ne">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contcat">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('login') }}" class="btn btn-primary btn-lg mx-2 button">Login</a>
                        </li>
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Our Services</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category"></div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/news.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">පොදු ළදරු රෝග සහ සෘතුමය සෞඛ්‍ය ගැටළු සමඟ කටයුතු කරන්නේ කෙසේද යන්න පිළිබඳ දෙමාපියන් සඳහා උපදෙස්.</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category"></div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/doctors/clinic.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">සුහද කාර්යක්ෂම හෙද මඩුල්ලක් තුලින් ඔබට සේවය සපයයි</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category"></div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/doctors/1weight.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">දරුවන්ගේ බර සටහන් නිවැරදි ලෙස මැන බලා පූෂණ තත්වය සටහන් කරයි.</h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category"></div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/doctors/th.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">යහපත් පවුල් සැලසුම් සදහා උපදෙස් වැඩසටහන් පවත්වනු ලැබේ.</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category"></div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/CARE.jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">දරුවන්ට ලැබිය යුතු රැකවරණය ලබා දීම</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img"></div>
                                        </div>
                                        <span class="mai-time"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 py-3">
                            <div class="card-blog">
                                <div class="header">
                                    <div class="post-category"></div>
                                    <a href="blog-details" class="post-thumb">
                                        <img src="../assets/img/doctors/happy (2).jpg" alt="">
                                    </a>
                                </div>
                                <div class="body">
                                    <h5 class="post-title"><a href="blog-details.html">ඔබගේ පවූල දරුවන් සමග නිතර සතුට පිරි නිවහනක් බවට කරගන්න</a></h5>
                                    <div class="site-info">
                                        <div class="avatar mr-2">
                                            <div class="avatar-img"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .row -->
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Recent Blog</h3>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="../assets/img/doctors/vacc1.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">එන්නත් කාලසටහන් සහ නව එන්නත් පිළිබඳ යාවත්කාලීන කිරීම් තිබේ.</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="../assets/img/develop.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">ප්‍රතිශක්තිකරණ වැඩසටහන් හෝ පෝෂණ දැනුවත් කිරීමේ වැනි යාවත්කාලීන කිරීම්.</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <a class="post-thumb" href="">
                                <img src="../assets/img/babymilk.jpg" alt="">
                            </a>
                            <div class="content">
                                <h5 class="post-title"><a href="#">අලුත උපන් දරුවන් රැකබලා ගැනීම, මව්කිරි දීම සහ මුල් ළමාවිය අධ්‍යාපනය පිළිබඳ උපදෙස්</a></h5>
                                <div class="meta">
                                    <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                                    <a href="#"><span class="mai-person"></span> Admin</a>
                                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-block">
                        <h3 class="sidebar-title">Important Data</h3>
                        <table class="table-custom">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MOH</td>
                                    <td>351 Maho Street, MA 02038</td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td>701-573-7582</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>healthcare@temporary.net</td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td><a href="https://macodeid.com/" target="_blank">MACode ID</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
    </div> <!-- .page-section -->

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>MOH-MAHO</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Special News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our Staff</h5>
                    <ul class="footer-menu">
                        <li><a href="#">DOCTOR</a></li>
                        <li><a href="#">General Midwife</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact Informations</h5>
                    <p class="footer-link mt-2">351 Maho Street, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <hr>
            <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
        </div> <!-- .container -->
    </footer> <!-- .page-footer -->

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>