<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    .nav-item.dropdown {
      position: relative;
    }

    .dropdown-toggle::after {
      display: inline-block;
      width: 0;
      height: 0;
      margin-left: 0.255em;
      vertical-align: 0.255em;
      content: "";
      border-top: 0.3em solid;
      border-right: 0.3em solid transparent;
      border-bottom: 0;
      border-left: 0.3em solid transparent;
    }

    .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1000;
      display: none;
      float: left;
      min-width: 10rem;
      padding: 0.5rem 0;
      margin: 0.125rem 0 0;
      font-size: 1rem;
      color: #212529;
      text-align: left;
      list-style: none;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.15);
      border-radius: 0.25rem;
    }

    .nav-item.dropdown:hover .dropdown-menu {
      display: block;
    }
  </style>
</head>

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
        <a class="navbar-brand" href="/"><span class="text-primary">Step</span>-child</a>
        <form action="#">

        </form>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contcat">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a href="{{ url('login') }}" class="btn btn-primary btn-lg mx-2 button dropdown-toggle" id="loginDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a>
              <div class="dropdown-menu" aria-labelledby="loginDropdown">
                <a class="dropdown-item" href="{{ url('login') }}">Admin</a>
                <a class="dropdown-item" href="{{ url('/midlogin') }}">Midwife</a>
                <a class="dropdown-item" href="{{ url('login') }}">User</a>
              </div>
            </li>

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <style>
    .carousel {
      width: 1400px;
      height: 500px;
      overflow: hidden;
      position: relative;
    }

    .carousel img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }

    .carousel img.active {
      opacity: 1;
    }
  </style>



  <div class="carousel">
    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">


      <img src="../assets/img/vacc.jpg" alt="Image 1">
      <img src="https://www.health.gov.lk/wp-content/uploads/2022/10/img-1.jpg" alt="Image 2">
      <img src="https://www.health.gov.lk/wp-content/uploads/2022/10/public-health.jpg" alt="Image 3">
      <div class="hero-section">
        <div class="container text-center wow zoomIn">
          <span class="subhead">Streamlining Baby Wellness for Brighter Beginnings</span>
          <h1 class="display-4">MOH-MAHO</h1>



        </div>
      </div>
    </div>
  </div>#e4e6ee







  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Streamlining Baby Wellness for Brighter Beginnings</span>
      <h1 class="display-4">MOH-MAHO</h1>

    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a staff</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Protect</span>-Your Baby future</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->




    <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to our clinic <br> Center</h1>
            <p class="text-grey mb-4">MOH ප්‍රදේශ ශ්‍රී ලංකාවේ මහජන සෞඛ්‍ය ජාලයේ කුඩාම සෞඛ්‍ය ඒකක වේ. සෑම MOH ප්‍රදේශයකම ප්‍රාථමික සෞඛ්‍ය සේවා සේවකයින්ගේ කැපවූ කණ්ඩායමක් සිටින අතර එය කාර්ය මණ්ඩල කාණ්ඩ කිහිපයකින් සමන්විත වේ. MBBS සුදුසුකම් ලත් වෛද්‍ය නිලධාරියෙකු වන MOH, MOH කණ්ඩායමේ කළමනාකරු ලෙස කටයුතු කරයි. ළමා සෞඛ්‍ය පද්ධතියට අයත් නිවාරණ ක්‍රියාකාරකම් රට පුරා බෙදා හරින ලද සෞඛ්‍ය වෛද්‍ය නිලධාරී (MOH) කණ්ඩායම් 343කට ආසන්න ප්‍රමාණයක් මගින් සිදු කරනු ලබයි.</p>
            <a href="about" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/doctors/clinic.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Staff</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/1nurse.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Sriyani Gunawardhana</p>
              <span class="text-sm text-grey">Cardiology</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor__circle_2.png" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Ameesha Baalasooriya</p>
              <span class="text-sm text-grey">Doctor</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/maxresdefault.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Renuka Herath</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/th (3).jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Malani Kanthithilaka</p>
              <span class="text-sm text-grey">General Midwife</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/th (1).jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Renuwka Sriwanthi</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Instructions</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">

              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/doctors/milk.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">පළමු මාස හතරේදී මවු කිරි පමණක් ලබාදෙන්න</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">

                  </div>
                  <span></span>
                </div>
                <span class="mai-time"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#"></a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/doctors/1weight.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">මසකට වරක් බර කිරා බලන්න.</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">

                  </div>
                  <span></span>
                </div>
                <span class="mai-time"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#"></a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/doctors/vacc1.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">වයස අනුව ලැබිය යුතු ප්‍රතිශක්තිකරණ ලබාදෙන්න</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">

                  </div>

                </div>
                <span class="mai-time"></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/about" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">send your message</h1>

      <div class="page-section">
        <div class="container">
          <h1 class="text-center wow fadeInUp">Get in Touch</h1>


          <form class="contact-form mt-5">
            <div class="row mb-3">
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="fullName">Name</label>
                <input type="text" id="fullName" class="form-control" placeholder="Full name..">
              </div>
              <div class="col-sm-6 py-2 wow fadeInRight">
                <label for="emailAddress">Email</label>
                <input type="text" id="emailAddress" class="form-control" placeholder="Email address..">
              </div>
              <div class="col-12 py-2 wow fadeInUp">
                <label for="subject">Subject</label>
                <input type="text" id="subject" class="form-control" placeholder="Enter subject..">
              </div>
              <div class="col-12 py-2 wow fadeInUp">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
          </form>
        </div>

      </div> <!-- .row -->
    </div> <!-- .container -->
  </div>
  <!-- .banner-home -->

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

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MOH-MAHO</a>. All right reserved</p>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

  <script>
    const carousel = document.querySelector('.carousel');
    const images = carousel.querySelectorAll('img');
    let currentIndex = 0;

    function showImage(index) {
      images.forEach((image, i) => {
        if (i === index) {
          image.classList.add('active');
        } else {
          image.classList.remove('active');
        }
      });
    }

    function moveCarouselTo(slide) {
      currentIndex = slide;
      showImage(currentIndex);
    }

    function autoChangeSlide() {
      moveCarouselTo((currentIndex + 1) % images.length);
    }

    setInterval(autoChangeSlide, 3000); // Change slide every 3 seconds

    showImage(currentIndex);
  </script>

</body>

</html>