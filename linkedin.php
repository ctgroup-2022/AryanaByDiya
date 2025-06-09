<?php include('navbar.php'); ?>

<!-- ======= LinkedIn Marketing Section ======= -->
<section id="linkedin-marketing" class="py-5" style="background: linear-gradient(to right, #0f172a, #1e293b); color: white; margin-top: 90px;">
  <div class="container" data-aos="fade-up">

    <!-- Glassmorphism Header -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill"
           style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 8px 20px rgba(0,0,0,0.4);">
        <h1 style="font-weight: 900; font-size: calc(2rem + 1vw); background: linear-gradient(90deg, #0077b5, #00a0dc); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          LINKEDIN MARKETING
        </h1>
      </div>
    </div>

    <!-- Main Content -->
    <div class="row align-items-center g-5">

      <!-- Text Content -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
        <h2 class="fw-bold mb-3" style="color: #60a5fa;">LinkedIn Marketing Services</h2>
        <h4 class="mb-4 text-info">Top LinkedIn Marketing Agency in India</h4>
        <p style="line-height: 1.8;">
          RankON Technologies is a top LinkedIn marketing agency in India offering result-oriented LinkedIn advertising solutions for both B2B and B2C businesses. With LinkedIn’s professional user base, it is one of the most powerful platforms to generate high-quality leads and establish authority in your niche.
        </p>
        <p>
          Our expert marketers craft targeted content, optimize your profile, and run strategic ad campaigns to ensure your brand reaches the right decision-makers.
        </p>
      </div>

      <!-- Image Section -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
        <img src="images/linkedin.webp" alt="LinkedIn Marketing" class="img-fluid rounded-4 shadow hover-scale w-75" />
      </div>

    </div>

  </div>
</section>

<!-- Hover & Responsive Enhancements -->
<style>
  .hover-scale {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  .hover-scale:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
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

<!-- AOS (Animate on Scroll) Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?php include('footer.php'); ?>
