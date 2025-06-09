
<style>
  .about-section {
    position: relative;
    background: #0f172a;
    overflow: hidden;
  }

  .glass-card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.1);
  }

  .text-gradient {
    background: linear-gradient(90deg, #38bdf8, #f472b6, #facc15);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .floating-img {
    max-width: 100%;
    animation: float 6s ease-in-out infinite;
    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.4));
  }

  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-12px); }
  }

  .blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.3;
    z-index: 0;
  }

  .blob1 {
    width: 300px;
    height: 300px;
    background: #38bdf8;
    top: -80px;
    left: -80px;
    animation: blobMove 12s infinite alternate;
  }

  .blob2 {
    width: 250px;
    height: 250px;
    background: #f472b6;
    bottom: -60px;
    right: -60px;
    animation: blobMove2 14s infinite alternate;
  }

  @keyframes blobMove {
    0% { transform: translate(0, 0); }
    100% { transform: translate(30px, 40px); }
  }

  @keyframes blobMove2 {
    0% { transform: translate(0, 0); }
    100% { transform: translate(-30px, -20px); }
  }

  @media (max-width: 768px) {
    .glass-card {
      padding: 2rem 1rem;
    }

    .text-gradient {
      font-size: 1.8rem;
      text-align: center;
    }

    .floating-img {
      max-width: 300px;
    }
  }
  .explore-btn {
  display: inline-block;
  padding: 12px 28px;
  background: linear-gradient(90deg, #38bdf8, #f472b6, #facc15);
  color: #0f172a;
  font-weight: 600;
  border-radius: 8px;
  text-decoration: none;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.explore-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(250, 204, 21, 0.3);
}

</style>

</head>
<body>
<!-- ======= About Section ======= -->
<section class="about-section position-relative" id="about" data-aos="fade-up">
  <!-- Animated Gradient Blobs -->
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>

  <div class="container py-5">
    <div class="row align-items-center justify-content-between glass-card p-4 rounded-4">

      <div class="col-lg-6 text-center mb-4 mb-lg-0" data-aos="fade-right">
        <img src="images/boy1.png" alt="About Aryana" class="img-fluid floating-img" />
      </div>

      <div class="col-lg-6 text-white px-lg-5" data-aos="fade-left">
        <h1 class="display-5 fw-bold text-gradient mb-4">About Us – Aryana: Build Innovation.</h1>
        <p class="lead mb-4">We are a forward-thinking digital marketing and web development agency that merges art, technology, and strategy to power your business forward.</p>

        <ul class="list-unstyled">
          <li class="mb-3 d-flex"><i class="bi bi-check2-circle text-info me-2 fs-5"></i> Creative minds & tech enthusiasts delivering unique digital solutions.</li>
          <li class="mb-3 d-flex"><i class="bi bi-check2-circle text-info me-2 fs-5"></i> Focused on innovation and meaningful audience engagement.</li>
          <li class="mb-3 d-flex"><i class="bi bi-check2-circle text-info me-2 fs-5"></i> Passionate execution of each project with a touch of brilliance.</li>
        </ul>

        <p class="fst-italic mt-3">At Aryana, we're not just developers — we're digital architects shaping your success story.</p>

        <!-- Explore More Button -->
        <div class="mt-4">
          <a href="about2.php" class="explore-btn">Explore More</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Custom About Section Styles -->


