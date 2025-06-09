<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Digital Marketing - Development Agency</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS Animation CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      background: #0f172a;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .gradient-banner {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
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
      background: linear-gradient(90deg, rgb(46, 74, 139),  #00d4ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    h2 {
      color:  #00d4ff;
    }

    ul li {
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>

<!-- ======= DIGITAL MARKETING Section ======= -->
<section id="digital-marketing" class="py-5" style="margin-top: 100px;">
  <div class="container" data-aos="fade-up">

    <!-- Title Banner -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill gradient-banner">
        <h1 class="gradient-text">DIGITAL MARKETING</h1>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row align-items-center g-5">
      
      <!-- Image Column -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <img src="https://via.placeholder.com/600x420.png?text=Digital+Marketing" alt="Digital Marketing" class="img-fluid rounded-4 shadow hover-scale w-75" />
      </div>

      <!-- Text Column -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
        <h2 class="fw-bold mb-3">Thriving in the Digital Era</h2>
        <p style="line-height: 1.8;">
          In the current digital era, where customers are inundated with information via the internet, companies must have a competitive advantage to survive. Step into the ever-changing realm of digital marketing.
        </p>
        <p>
          This potent toolkit provides a plethora of avenues and strategies to not only engage with your target market but also build relationships, foster brand loyalty, and eventually propel commercial success.
        </p>
        <div class="p-4 mt-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border-left: 5px solid rgba(59,130,246,0.6);">
          <strong>📈 Why it matters:</strong>
          <ul class="mt-2 ps-3" style="line-height: 1.6;">
            <li><strong>Multi-Channel Reach:</strong> Engage audiences across web, social, and mobile</li>
            <li><strong>Targeted Campaigns:</strong> Optimize conversion with data-driven strategies</li>
            <li><strong>Real-time Analytics:</strong> Measure what matters & refine continuously</li>
            <li><strong>Cost Efficiency:</strong> Outperform traditional marketing on a smaller budget</li>
          </ul>
        </div>
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
