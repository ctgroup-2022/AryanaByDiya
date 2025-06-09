<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Creative Developer Agency Cards</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <style>
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background: #0f172a;
    color: #e2e8f0;
  }

  .services-section {
    padding: 80px 20px;
    background: #0f172a;
    position: relative;
    z-index: 1;
  }

  .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #38bdf8;
    margin-bottom: 10px;
  }

  .section-subtitle {
    font-size: 16px;
    color: #cbd5e1;
    margin-bottom: 40px;
  }

  .services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 30px;
  }

  .service-card {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    padding: 30px 20px;
    text-align: center;
    backdrop-filter: blur(10px);
    transition: all 0.4s ease;
    position: relative;
    box-shadow: 0 0 0 transparent;
    transform: translateY(20px);
    opacity: 0;
  }

  .service-card i {
    font-size: 32px;
    color: #38bdf8;
    margin-bottom: 15px;
    display: inline-block;
  }

  .service-card h5 {
    font-size: 20px;
    font-weight: 600;
    margin: 10px 0;
    color: #fff;
  }

  .service-card a {
    text-decoration: none;
    color: #38bdf8;
    font-weight: 500;
    font-size: 14px;
    display: inline-block;
    margin-top: 10px;
    transition: color 0.3s;
  }

  .service-card:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 25px rgba(56, 189, 248, 0.3);
    border-color: #38bdf8;
  }

  @media (max-width: 768px) {
    .section-title {
      font-size: 28px;
    }
  }
</style>
</head>
<body>

<!-- Services Section -->
<section class="services-section" id="services">
  <div class="container text-center">
    <h2 class="section-title">Our Expertise</h2>
    <p class="section-subtitle">Crafted with precision, delivered with passion.</p>

    <div class="services-grid">
      <div class="service-card">
        <i class="bi bi-code-slash"></i>
        <h5>Web Development</h5>
        <a href="web_development.php">Explore More</a>
      </div>
      <div class="service-card">
        <i class="bi bi-brush"></i>
        <h5>Graphic Design</h5>
        <a href="graphic_design.php">Explore More</a>
      </div>
      <div class="service-card">
        <i class="bi bi-chat-left-text"></i>
        <h5>Content Marketing</h5>
        <a href="content_marketing.php">Explore More</a>
      </div>
      <div class="service-card">
        <i class="bi bi-graph-up"></i>
        <h5>SEO Services</h5>
        <a href="seo.php">Explore More</a>
      </div>
      <div class="service-card">
        <i class="bi bi-share"></i>
        <h5>SMO Services</h5>
        <a href="smo.php">Explore More</a>
      </div>
      <div class="service-card">
        <i class="bi bi-camera-video"></i>
        <h5>Media</h5>
        <a href="media.php">Explore More</a>
      </div>
      <div class="service-card">
        <i class="bi bi-megaphone"></i>
        <h5>Digital Marketing</h5>
        <a href="digital_marketing.php">Explore More</a>
      </div>
      <div class="service-card">
        <i class="bi bi-cart3"></i>
        <h5>E-commerce Solutions</h5>
        <a href="e-commerce.php">Explore More</a>
      </div>
    </div>
  </div>
</section>


<script>
  // Animate service cards on load
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".service-card");
    cards.forEach((card, i) => {
      setTimeout(() => {
        card.style.opacity = 1;
        card.style.transform = "translateY(0)";
      }, i * 150);
    });
  });
</script>

</body>
</html>
