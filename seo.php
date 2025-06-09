<?php include('navbar.php'); ?>

<!-- ======= SEO Services Section ======= -->
<section id="seo-services" class="py-5" style="background: linear-gradient(to right, #0f172a, #1e293b); color: white; margin-top: 100px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Section Heading -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-4"
           style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 25px rgba(0,0,0,0.4);">
        <h1 style="font-weight: 900; font-size: calc(2.2rem + 1vw); background: linear-gradient(90deg, #00d4ff, #38bdf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          SEO SERVICES
        </h1>
       
      </div>
    </div>

    <!-- Main Content -->
    <div class="row align-items-center g-5">

      <!-- Image -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
        <div class="position-relative">
          <img src="images/seo/seo1.png" alt="SEO Illustration" class="img-fluid rounded-4 shadow-lg hover-scale w-75">
          <div class="circle-glow"></div>
        </div>
      </div>

      <!-- Text -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="100">
        <h2 class="fw-bold mb-3" style="color: #38bdf8;">Optimized to Rank. Designed to Convert.</h2>
        <p style="line-height: 1.8;">
          Real SEO isn’t just keywords — it’s about architecture, speed, and trust. We design SEO strategies that align with search intent, boost visibility, and maximize your ROI.
        </p>

        <div class="p-4 mt-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border-left: 5px solid #0ea5e9;">
          <strong>📌 Key SEO Highlights:</strong>
          <ul class="mt-3 ps-3" style="list-style: none; line-height: 1.7;">
            <li>🔍 <strong>Technical SEO:</strong> Schema, Core Web Vitals, Speed Optimization</li>
            <li>📈 <strong>On-Page & Off-Page:</strong> Everything from meta tags to backlinks</li>
            <li>🎯 <strong>Conversion-Focused UX:</strong> Traffic that turns into business</li>
            <li>📊 <strong>Transparent Reporting:</strong> Metrics that matter, always</li>
          </ul>
        </div>

        <p class="mt-4">
          We've helped over <strong>250+ brands</strong> grow using SEO-first design thinking. Whether you're launching or scaling, we deliver performance-driven search visibility.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- Styles -->
<style>
  .hover-scale {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .hover-scale:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 30px rgba(59,130,246,0.6);
  }

  .circle-glow {
    position: absolute;
    top: -30px;
    left: -30px;
    width: 100px;
    height: 100px;
    background: radial-gradient(circle, rgba(59,130,246,0.5), transparent);
    border-radius: 50%;
    z-index: -1;
    animation: pulseGlow 3s infinite ease-in-out;
  }

  @keyframes pulseGlow {
    0%, 100% { transform: scale(1); opacity: 0.7; }
    50% { transform: scale(1.3); opacity: 1; }
  }
</style>

<!-- AOS Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php include('footer.php'); ?>
