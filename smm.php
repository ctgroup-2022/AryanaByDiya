<?php include('navbar.php'); ?>

<!-- ======= Social Media Marketing Section ======= -->
<section id="smm-services" class="py-5" style="background: linear-gradient(to bottom right, #1e293b, #0f172a); color: white; margin-top: 100px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Gradient Title Banner -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill" 
           style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 8px 20px rgba(0,0,0,0.4);">
        <h1 style="font-weight: 900; font-size: calc(2.2rem + 1vw);  background: linear-gradient(90deg, #facc15, #f59e0b); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          SOCIAL MEDIA MARKETING
        </h1>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row align-items-center g-5">

      <!-- Text Column -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
        <h2 class="fw-bold mb-3" style="color: #facc15">Driving Engagement through Powerful Social Media Campaigns</h2>
        <p style="line-height: 1.8;">
          Using the right social media strategy can be a game changer for your brand as it will help you reach your audience effectively. Let’s look at a few success stories:
        </p>
        <p>
          In 2013, Spotify introduced its "Year in Review" feature. The company realized it had a treasure trove of streaming data. While the graphics were on-brand
          and less quirky than today’s versions, they still captured the audience’s attention.
        </p>
        <p>
          Fast-forward to 2016, Spotify rebranded these data stories as "Wrapped." Each year, Spotify Wrapped introduces new and fun features based on users’ listening habits — 
          from identifying your unique “audio aura” to categorizing you into one of 16 “listening personality types.”
        </p>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
        <img src="images/smm3.webp" alt="Social Media Marketing" class="img-fluid rounded-4 shadow hover-scale w-75" />
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
