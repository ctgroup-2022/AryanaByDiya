<?php include('navbar.php'); ?>

<!-- ======= Facebook Marketing Section ======= -->
<section id="facebook-marketing" class="py-5" style="background: linear-gradient(to bottom right, #1e293b, #0f172a); color: white; margin-top: 100px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Gradient Title Banner -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill" 
           style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 8px 20px rgba(0,0,0,0.4);">
        <h1 style="font-weight: 900; font-size: calc(2.2rem + 1vw);  background: linear-gradient(90deg, #FFD700, #FFB800); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          Facebook
        </h1>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row align-items-center g-5">
      
      <!-- Text Column -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
        <h2 class="fw-bold mb-3" style="color: #FFD700">Affordable Facebook Marketing Packages</h2>
        <p style="line-height: 1.8;">
          Looking for Facebook marketing packages in India but not sure how much Facebook Ads cost? We offer customized Facebook marketing plans designed to meet business goals and budgets.
        </p>
        <p>
          Our average monthly cost ranges from <strong>₹20,000 INR / $250 USD</strong> to <strong>₹45,000 INR / $600 USD</strong>, depending on campaign scope and targeting.
        </p>
        <div class="p-4 mt-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border-left: 5px solid  #FFD700;">
          <strong>📌 What you get with our plans:</strong>
          <ul class="mt-2 ps-3" style="line-height: 1.6;">
            <li>Ad strategy tailored to your niche</li>
            <li>High-conversion creatives and copy</li>
            <li>Advanced targeting and retargeting</li>
            <li>Performance reporting and optimization</li>
          </ul>
        </div>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
        <img src="images/facebook.webp" alt="Facebook Marketing Packages India" class="img-fluid rounded-4 shadow hover-scale w-75 mx-auto" />
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

  @media (max-width: 576px) {
    .rounded-pill {
      padding: 1rem !important;
    }
    h1 {
      font-size: 1.8rem !important;
    }
  }
</style>

<!-- AOS Animation -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php include('footer.php'); ?>
