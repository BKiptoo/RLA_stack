<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RLA</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/RLA-logos_white.png" rel="icon" />
  <link href="assets/img/RLA-logos_white.png rel="apple-touch-icon" />


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="page-about">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/RLA-logos_white.png" alt="">
        <h1 class="d-flex align-items-center">RLA</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
            <ul>
                <li><a href="{{ route('front.home') }}" class="{{ request()->is('home*') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('front.home', 'about') }}" class="{{ request()->is('about*') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('front.home', 'services') }}" class="{{ request()->is('services*') ? 'active' : '' }}">Services</a></li>
                <li><a href="{{ route('front.home', 'team') }}" class="{{ request()->is('team*') ? 'active' : '' }}">Team</a></li>
                <li><a href="{{ route('front.home', 'blog') }}" class="{{ request()->is('blog*') ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ route('front.home', 'news') }}" class="{{ request()->is('news*') ? 'active' : '' }}">News</a></li>
                <li><a href="{{ route('front.home', 'contact') }}" class="{{ request()->is('contact*') ? 'active' : '' }}">Contact</a></li>
            </ul>
            
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/about-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>About</h2>
        <ol>
          <li><a href="{{ route('front.home') }}" class="{{ request()->is('home*') ? 'active' : '' }}">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Our Story
              </h3>
              <p style="font-family: 'Arial', sans-serif; color: #333; font-size: 16px; line-height: 1.5;">
                The Rising Leaders Alliance (RLA) Established in 2023, the Rising Leaders Alliance (RLA) has swiftly
                become a dynamic force in Kericho, the Green Town. Committed to community development, RLA has empowered
                local youth, launched a socially impactful fast-food startup, and extended heartfelt visits to
                children's homes. Beyond local impact, RLA aspires to transform into a global financial institution.
                With a brief yet impactful history, RLA remains dedicated to cultivating change and fostering leadership
                within the community, inviting all to join in the journey of transformative impact
              </p>

              <ul>
                <ul>
                  <li><i class="bi bi-check-circle-fill"></i> Empowering local youth through skill development programs.
                  </li>
                  <li><i class="bi bi-check-circle-fill"></i> Launching a sustainable community garden to promote local
                    agriculture.</li>
                  <li><i class="bi bi-check-circle-fill"></i> Organizing leadership workshops for aspiring community
                    leaders.</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>About Us</h2>
        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
          <div class="col-xl-7 slides position-relative">
            <div class="slides-1 swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Our Vision and Mission</h3>
                    <h4 class="mb-3">
                      Discover our commitment to fostering growth and making a positive impact.
                    </h4>
                    <p>
                      <strong>Our Vision:</strong> To create a world where businesses thrive, communities prosper, and
                      every individual has the opportunity to reach their full potential. We envision a future where
                      sustainable development and positive impact are the driving forces behind societal growth.

                    </p>
                  </div>
                </div>
                <!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Our Values</h3>
                    <h4 class="mb-3">
                      Explore the principles that guide us in delivering excellence and integrity.
                    </h4>
                    <p>
                    <p>
                      <strong>Integrity:</strong> Upholding honesty and ethical conduct, we build trust with our
                      community and partners.

                      <strong>Excellence:</strong> Striving for the highest quality, we empower local youth and foster
                      community development.

                      <strong>Innovation:</strong> Embracing creativity, we seek innovative solutions for positive
                      change.

                      <strong>Community:</strong> Our actions are driven by a sense of responsibility for the well-being
                      and prosperity of the communities we serve.

                      <strong>Empowerment:</strong> Committed to empowering individuals and businesses, we create
                      lasting impact through education and support.
                    </p>
                    </p>
                  </div>
                </div>
                <!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Our Team</h3>
                    <h4 class="mb-3">
                      Meet the dedicated individuals driving our organization forward.
                    </h4>
                    <p>
                      Discover the passionate team behind our success. Each member is committed to our shared vision and
                      values, contributing their unique talents to drive positive change. Learn more about the
                      individuals who make our mission a reality.
                    </p>
                  </div>
                </div>
                <!-- End slide item --><!-- End slide item -->
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Join Us in Shaping the Future</h3>
            <p>
              Discover opportunities for personal growth, community
              engagement, and leadership development. Let's create a positive
              impact together!
            </p>
            <a class="cta-btn" href="#">Get Involved</a>
          </div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Team</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>RLA</span>
            </a>
            <p>
              RLA is a youth group found in Kericho County and its aiming to
              make themselves prominent
            </p>
            <div class="social-links d-flex mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bi bi-dash"></i> <a href="index.html">Home</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="about.html">About us</a>
              </li>
              <li>
                <i class="bi bi-dash"></i>
                <a href="services.html">Services</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Skill Development</a></li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Community Engagement</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Leadership Development</a>
              </li>
              <li><i class="bi bi-dash"></i> <a href="#">Peer Support</a></li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Mental Health Awareness</a>
              </li>
              <li>
                <i class="bi bi-dash"></i> <a href="#">Global Awareness</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <i class="bi-geo-alt me-2"></i>
              Kericho, Kenya
              <br />

              <strong>Phone:</strong> +245742771316<br />
              <strong>Email:</strong> risingleadersalliance@gmail.com<br />
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>