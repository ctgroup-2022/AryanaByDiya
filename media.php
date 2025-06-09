<?php include('navbar.php'); ?>

<!-- ======= MEDIA SERVICES Section ======= -->
<section id="media-services" class="py-5" style="background: linear-gradient(to bottom right, #1e293b, #0f172a); color: white; margin-top: 100px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Gradient Title Banner -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill" 
           style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 8px 20px rgba(0,0,0,0.4);">
        <h1 style="font-weight: 900; font-size: calc(2.2rem + 1vw);  background: linear-gradient(90deg, rgb(38, 62, 118), #00d4ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          MEDIA
        </h1>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row align-items-center g-5">
      
      <!-- Text Column -->
      <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-right">
        <h2 class="fw-bold mb-3" style="color: #00d4ff">Engaging Audiences with Purposeful Media</h2>
        <p style="line-height: 1.8;">
          Content marketing is all about creating and distributing relevant, valuable media—like videos, podcasts, blogs, and more—that resonates with your audience and builds trust over time.
        </p>
        <p>
          Whether it's organic or paid media, our agency aligns every channel with a unified content strategy.
        </p>
        <div class="p-4 mt-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border-left: 5px solid  #00d4ff;">
          <strong>📌 Where content makes an impact:</strong>
          <ul class="mt-2 ps-3" style="line-height: 1.6;">
            <li><strong>Email Marketing:</strong> Build anticipation & trust</li>
            <li><strong>Social Media:</strong> Power your voice & reach</li>
            <li><strong>SEO:</strong> Rank with consistent, high-quality posts</li>
            <li><strong>PPC:</strong> Fuel paid campaigns with conversion-ready media</li>
          </ul>
        </div>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6 text-center order-2 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
        <img src="images/media.webp" alt="Media Marketing" class="img-fluid rounded-4 shadow hover-scale w-75" />
      </div>

    </div>

  </div>
</section>

<!-- Hover & Animation Styles -->
<style>
  .hover-scale {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  .hover-scale:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
  }
</style>

<!-- AOS Animation -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

