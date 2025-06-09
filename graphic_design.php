<?php include('navbar.php'); ?>

<!-- ======= Graphic Design Section ======= -->
<section id="graphic-design" class="py-5" style="background: linear-gradient(to bottom right, #1e293b, #0f172a); color: white; margin-top: 100px; position: relative; overflow: hidden;">
  <div class="container" data-aos="fade-up">

    <!-- Creative Glassmorphic Title -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center p-4 rounded-pill" 
           style="background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 8px 20px rgba(0,0,0,0.4);">
        <h1 style="font-weight: 900; font-size: calc(2.2rem + 1vw); background: linear-gradient(90deg, #00d4ff, #0072ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          GRAPHIC DESIGN
        </h1>
      </div>
    </div>

    <!-- Main Content -->
    <div class="row align-items-center g-5">
      
      <!-- Image Column -->
      <div class="col-lg-6 text-center order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
        <img src="images/gr.png" alt="Graphic Design" class="img-fluid rounded-4 shadow hover-scale w-75" style="max-height: 420px;" />
      </div>

      <!-- Text Column -->
      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="100">
        <h2 class="fw-bold mb-3" style="color: #38bdf8;">Visual Storytelling that Connects & Converts</h2>
        <p style="line-height: 1.8;">
          Graphic design is more than just looks — it’s about strategy. From brand identity to advertising assets, we turn concepts into stunning visuals that captivate and convert.
        </p>
        <p style="line-height: 1.8;">
          Our designers combine creativity and precision to deliver visuals that speak your brand's language — from logos and banners to infographics, product mockups, and packaging.
        </p>
        <div class="p-4 mt-4 rounded-4" style="background: rgba(255, 255, 255, 0.05); border-left: 5px solid #0ea5e9;">
          <strong>🎨 Our Design Expertise:</strong>
          <ul class="mt-2 ps-3" style="line-height: 1.6;">
            <li>Logo & Branding Kits</li>
            <li>Social Media & Ad Creatives</li>
            <li>Posters, Flyers & Brochures</li>
            <li>UI Design Mockups & Icons</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Hover Effect CSS -->
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
<script>AOS.init();</script>

<?php include('footer.php'); ?>
