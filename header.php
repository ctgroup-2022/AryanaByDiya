<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aryana website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  #hero {
    position: relative;
    width: 100%;
    height: 100vh;
    background: linear-gradient(135deg,rgb(29, 19, 79),rgb(20, 48, 62),rgb(7, 2, 40));
    background-size: 400% 400%;
    animation: gradientMove 15s ease infinite;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    overflow: hidden;
    padding-top: 80px;
    z-index: 1;
  }

  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  #hero::before,
  #hero::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    z-index: 0;
    opacity: 0.6;
    filter: blur(80px);
  }

  #hero::before {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, #ec4899, transparent);
    top: -100px;
    left: -100px;
    animation: floatBlob 8s infinite alternate ease-in-out;
  }

  #hero::after {
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, #38bdf8, transparent);
    bottom: -80px;
    right: -80px;
    animation: floatBlob 10s infinite alternate ease-in-out;
  }

  @keyframes floatBlob {
    0% { transform: translateY(0) rotate(0deg); }
    100% { transform: translateY(30px) rotate(10deg); }
  }

  #hero h1 {
    font-size: 64px;
    font-weight: 800;
    line-height: 1.3;
    z-index: 2;
    position: relative;
    background: linear-gradient(90deg, #38bdf8, #ec4899, #facc15, #38bdf8);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textGradient 6s ease infinite, fadeInUp 1s ease forwards;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
  }

  @keyframes textGradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  #hero h1 span {
    display: inline-block;
    animation: bounceIn 1.2s ease forwards;
    animation-delay: 0.3s;
    background: linear-gradient(90deg, #f472b6, #60a5fa, #34d399);
    background-size: 200% 200%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* ...existing code... */
.btn-book {
    background: linear-gradient(135deg, #f43f5e, #8b5cf6);
    color: white;
    padding: 14px 34px;
    border-radius: 50px;
    font-size: 18px;
    font-weight: 600;
    box-shadow: 0 0 25px rgba(236, 72, 153, 0.5);
    transition: 0.3s;
    z-index: 2;
    margin-top: 60px; /* Increased margin for more space above */
    margin-bottom: 20px; /* Optional: add space below */
    position: relative;
    display: inline-block; /* Ensures button is sized to content */
}
/* ...existing code... */
/* ...existing code... */
#hero .container {
    margin-top: 40px; /* Adjust as needed */
}
/* ...existing code... */
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(40px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @keyframes bounceIn {
    0% { transform: scale(0.5); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
  }

  @media (max-width: 768px) {
    #hero {
      padding-top: 120px;
      height: auto;
      text-align: center;
    }

    #hero h1 {
      font-size: 36px;
    }

    .btn-book {
      font-size: 16px;
      padding: 12px 28px;
    }
  }
  #navbar ul ul {
  left: 100%;
  top: 0;
  margin-left: 0;
  position: absolute;
  display: none;
  min-width: 200px;
  z-index: 99;
  background: #fff;
  border-radius: 4px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.08);
}
#navbar ul li:hover > ul,
#navbar ul li:focus-within > ul {
  display: block;
}
#navbar ul ul ul {
  left: 100%;
  top: 0;
}
#navbar ul li {
  position: relative;
}
#navbar ul ul li a {
  color: #222;
  padding: 10px 20px;
  white-space: nowrap;
}
#navbar ul ul li a:hover {
  background: #f7f7f7;
  color: #007bff;
}
@media (max-width: 991px) {
  #navbar ul ul,
  #navbar ul ul ul {
    position: static;
    display: none;
    box-shadow: none;
    background: none;
  }
  #navbar ul li:hover > ul,
  #navbar ul li:focus-within > ul,
  #navbar ul ul li:hover > ul,
  #navbar ul ul li:focus-within > ul {
    display: block;
  }
}
</style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+91 9914504910</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon-Sat: 9:00AM - 4:30PM</span></i>
      </div>

     
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0 fw-bold"><a href="index.php">ARYANA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li class="dropdown" ><a href="index.php"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             <li class="dropdown"><a href="seo.php"><span>SEO Services</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                
                  
                  </li>
                  <li><a href="opensource.php">Outsource SEO</a></li>
                  <li><a href="on-page.php">OnPage SEO</a></li>
                  <li><a href="off-page.php">Off-PAge SEO </a></li>
                  
                  <li><a href="technical.php">Technical SEo </a></li>
                 
                  <li><a href="keyword.php">Keyword Research </a></li>
                   <li><a href="#">CMS SEO </a></li>
                </ul>
            </li>
                
                
            <li class="dropdown"><a href="web_development.php"><span>Web Development</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Website Maintenance</a>
                  
                  </li>
                  <li><a href="#">Website designing</a></li>
                  <li><a href="#">Database Development</a></li>
                  <li><a href="#">Mobile Development</a></li>
                  <li><a href="#">Application Development</a></li>
                </ul>
            </li>
                
              </li>
              <li class="dropdown"><a href="digital_marketing.php"><span>Digital Marketing </span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                <li class="dropdown"><a href="smm.php"><span>SMM Services</span> <i class="bi bi-chevron-right"></i></a>
                <ul style="width: 200px; height: 300px;">
                  <li><a href="facebook.php">Facebook Marketing</a>
                  
                </li>
                  <li><a href="instagram.php">Instagram marketing</a></li>
                  <li><a href="instagram.php"> Youtube marketing</a></li>
                  <li><a href="linkedin.php">Linkedin Marketing</a></li>
                  <li><a href="twitter.php">Twitter Marketing</a></li>
                </ul>
              </li>
                   <li><a href="#">Software Development</a></li>
                  <li><a href="#">Google my business</a></li>
                  <li><a href="#">Search Engine Marketing</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="media.php"><span>Media</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Video Production</a>
                  
                </li>
                  <li><a href="#">Video Testimonial</a></li>
                  <li><a href="#">Product Photography </a></li>
                  <li><a href="#">Drone Video And Photography</a></li>
                  
                </ul>
              </li>
              <li class="dropdown"><a href="graphic_design.php"><span>Graphic Design</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                   <li><a href="#">Logo Design</a></li>
                  <li><a href="#">Animation Video</a></li>
               
                </ul>
              </li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="project.php">Projects</a></li>
          
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="contact.php" class="book-a-table-btn scrollto d-none d-lg-flex">Conatct Us</a>

    </div>
  </header><!-- End Header -->
  <section id="hero" class="d-flex align-items-center">
  <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h1>
          Elevating Your Vision <span>Innovating</span> Your <span>Growth</span>
        </h1>
        <a href="project.php" class="btn-book scrollto mt-4">Explore Projects</a>
      </div>
      <div class="col-lg-4 mt-5 d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="300">
        <a href="video/clg video (2).mp4" class="glightbox play-btn"></a>
      </div>
    </div>
  </div>
</section>
