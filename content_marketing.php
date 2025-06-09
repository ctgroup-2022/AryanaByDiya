<?php include('navbar.php'); ?>

<!-- ======= Content Marketing Section ======= -->
<section id="content-marketing" class="py-5" style="background: linear-gradient(to right, #0f172a, #1e293b); color: white; margin-top: 100px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Gradient Heading Box -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill" 
           style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 25px rgba(0,0,0,0.4);">
        <h1 style="font-weight: 900; font-size: calc(2.2rem + 1vw); background: linear-gradient(90deg, #00d4ff, #0072ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          CONTENT MARKETING
        </h1>
      </div>
    </div>

    <!-- Main Content -->
    <div class="row align-items-center g-5">

      <!-- Left Image -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
        <img src="images/co.png" alt="Content Marketing" class="img-fluid rounded-4 shadow-lg hover-scale w-75" style="max-height: 420px;">
      </div>

      <!-- Right Text -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="100">
        <h2 class="fw-bold mb-3" style="color: #38bdf8;">Strategic Storytelling for Real Results</h2>
        <p style="line-height: 1.8;">
          Content marketing drives brand loyalty through authentic storytelling and valuable experiences. We build relationships that convert with every word, graphic, and post.
        </p>
        
        <div class="p-4 mt-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border-left: 5px solid #0ea5e9;">
          <strong>📌 What We Deliver:</strong>
          <ul class="mt-2 ps-3" style="line-height: 1.6; list-style: none;">
            <li>📩 <strong>Email Campaigns:</strong> Personalized sequences that drive opens and clicks</li>
            <li>📱 <strong>Social Media Content:</strong> Compelling, scroll-stopping assets</li>
            <li>🔍 <strong>SEO Blogs & Articles:</strong> Informative, search-optimized storytelling</li>
            <li>📹 <strong>Video Scripts & Visuals:</strong> Captivating scripts that convert on screen</li>
          </ul>
        </div>

        <p class="mt-4">
          From content calendars to creative execution — we create strategies that **educate**, **engage**, and **influence** at every stage of the funnel.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- Hover Effect -->
<style>
  .hover-scale {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .hover-scale:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
  }
</style>

<!-- AOS Animation -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php include('footer.php'); ?>
