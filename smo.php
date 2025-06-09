<?php include('navbar.php'); ?>
  
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0f172a;
      color: white;
    }

    section {
      padding: 80px 0;
      background: radial-gradient(circle at top left,rgb(25, 34, 61), #0f172a);
    }

    .section-title {
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 25px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .section-title h1 {
      font-size: calc(2.2rem + 1vw);
      font-weight: 800;
      background: linear-gradient(90deg, #00d4ff, #4f46e5);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .smo-img {
      width: 100%;
      max-width: 400px;
      border-radius: 20px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .smo-img:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 30px rgba(32, 53, 113, 0.3);
    }

    .highlight-box {
      background: rgba(255,255,255,0.05);
      border-left: 5px solidrgb(39, 49, 115);
      padding: 20px;
      border-radius: 15px;
    }

    .glow-circle {
      position: absolute;
      top: -20px;
      left: -20px;
      width: 80px;
      height: 80px;
      background: radial-gradient(circle, rgba(59,130,246,0.6), transparent);
      border-radius: 50%;
      z-index: -1;
      animation: glow 3s infinite ease-in-out;
    }

    @keyframes glow {
      0%, 100% { transform: scale(1); opacity: 0.6; }
      50% { transform: scale(1.3); opacity: 1; }
    }

    @media (max-width: 767px) {
      .section-title h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <!-- SMO Services Section -->
  <section id="smo-services">
    <div class="container" data-aos="fade-up">
      <div class="section-title" style="margin-top: 90px;">
        <h1>🚀 SMO SERVICES</h1>
        
      </div>

      <div class="row align-items-center g-5">
        <!-- Text Content -->
        <div class="col-lg-6" data-aos="fade-right">
          <h2 class="fw-bold mb-3" style="color: #00d4ff;">Social Media Optimization Company</h2>
          <p style="line-height: 1.8;">
            As one of India’s leading SMO service providers, we drive web traffic, brand recognition, and customer engagement through precise social strategies and channel-specific growth tactics.
          </p>
          <p>
            Our experienced team has helped 100+ brands grow on platforms like Instagram, Facebook, LinkedIn, and Twitter—resulting in greater ROI and meaningful engagement.
          </p>
          <div class="highlight-box mt-4">
            <strong>✨ Why Us?</strong>
            <ul class="mt-2 ps-3" style="line-height: 1.6;">
              <li>Creative content strategies & calendar planning</li>
              <li>Growth-focused platform targeting</li>
              <li>Affordable packages for all business sizes</li>
              <li>Conversion-focused analytics & tracking</li>
            </ul>
          </div>
        </div>

        <!-- Image Content -->
        <div class="col-lg-6 text-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <img src="images/smo.png" alt="SMO Services" class="smo-img" />
          <div class="glow-circle"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- JS for Animation -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>AOS.init();</script>
</body>
</html>
