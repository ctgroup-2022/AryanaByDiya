<?php include('navbar.php'); ?>
  <style>
    body {
      margin: 0;
      background: linear-gradient(to bottom right, #1e293b, #0f172a);
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .gradient-banner {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .hover-scale {
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .hover-scale:hover {
      transform: scale(1.05);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }

    h1.gradient-text {
      font-weight: 900;
      font-size: calc(2.2rem + 1vw);
      background: linear-gradient(90deg, rgb(38, 62, 118),#00d4ff);
);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    h2 {
           color:#00d4ff;
;
    }

    ul li {
      margin-bottom: 0.5rem;
    }

    .highlight-box {
      background: rgba(255, 255, 255, 0.05);
      border-left: 5px solid #00d4ff;
    }
  </style>
</head>
<body>

<!-- ======= DIGITAL MARKETING Section ======= -->
<section id="digital-marketing" class="py-5" style="margin-top: 100px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Title Banner -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill gradient-banner">
        <h1 class="gradient-text">E-Commerce</h1>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row align-items-center g-5">
      
      <!-- Text Column -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
        <h2 class="fw-bold mb-3">Accelerate Growth Through Intelligent Digital Campaigns</h2>
        <p style="line-height: 1.8;">
          Digital marketing is the cornerstone of visibility in today's online-first world. From performance-driven ads to organic content creation, every brand needs a smart digital strategy to engage and convert.
        </p>
        <p>
          Our agency crafts tailored digital campaigns combining creativity, analytics, and automation—ensuring your brand doesn’t just exist online but thrives.
        </p>
        <div class="p-4 mt-4 rounded-4 highlight-box">
          <strong>🚀 What We Do Best:</strong>
          <ul class="mt-2 ps-3" style="line-height: 1.6;">
            <li><strong>SEO & SEM:</strong> Rank higher and drive targeted traffic</li>
            <li><strong>Social Ads:</strong> Engage audiences with dynamic campaigns</li>
            <li><strong>Email Funnels:</strong> Automate nurture sequences that convert</li>
            <li><strong>Analytics & Insights:</strong> Optimize through data-driven decisions</li>
          </ul>
        </div>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <img src="https://via.placeholder.com/600x420.png?text=Digital+Marketing" alt="Digital Marketing" class="img-fluid rounded-4 shadow hover-scale w-75" />
      </div>

    </div>

  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>
