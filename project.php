<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Creative Projects Slider</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #0f172a;
      color: #e2e8f0;
    }

    .projects-section {
      padding: 80px 20px;
    }

    .section-title {
      text-align: center;
      margin-bottom: 50px;
    }

    .section-title h2 {
      font-size: 36px;
      color: #38bdf8;
    }

    .section-title p {
      font-size: 18px;
      color: #facc15;
      margin-top: 10px;
    }

    .swiper {
      padding-bottom: 60px;
    }

    .swiper-slide {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(56, 189, 248, 0.15);
      backdrop-filter: blur(12px);
      overflow: hidden;
      transition: transform 0.4s ease;
      display: flex;
      flex-direction: column;
    }

    .swiper-slide:hover {
      transform: translateY(-10px);
    }

    .project-card {
      padding: 20px;
    }

    .project-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 12px;
    }

    .project-content {
      margin-top: 20px;
    }

    .project-content h3 {
      font-size: 22px;
      color: #38bdf8;
    }

    .project-content p {
      font-size: 14px;
      margin: 10px 0;
    }

    .project-content ul {
      padding-left: 20px;
      font-size: 14px;
    }

    .project-content li {
      margin-bottom: 6px;
    }

    .swiper-pagination-bullet {
      background-color: #94a3b8;
      opacity: 1;
    }

    .swiper-pagination-bullet-active {
      background-color: #38bdf8;
    }

    @media (min-width: 768px) {
      .swiper-slide {
        width: 380px;
      }
    }
  </style>
</head>
<body>

<section id="projects" class="projects-section">
  <div class="container">
    <div class="section-title">
      <h2>Our Projects</h2>
      <p>Websites of Our Schools and Institutes</p>
    </div>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <!-- Project 1 -->
        <div class="swiper-slide">
          <div class="project-card">
            <img src="images/project1.png" alt="CT Sunshine" />
            <div class="project-content">
              <h3>CT SUNSHINE</h3>
              <p>Academic knowledge combined with cultural activities to shape global awareness.</p>
              <ul>
                <li>✅ Qualified & Trained Security Team</li>
                <li>✅ Campus-Wide Surveillance</li>
                <li>✅ Regular Counseling & Safety Drills</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="swiper-slide">
          <div class="project-card">
            <img src="images/project2.png" alt="CT Half Marathon" />
            <div class="project-content">
              <h3>CT HALF MARATHON</h3>
              <p>A charity race fostering health and sustainability since 2007.</p>
              <ul>
                <li>✅ Choose from 7km or 21km challenges</li>
                <li>✅ No category restrictions</li>
                <li>✅ Cash prizes up to ₹25,000</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="swiper-slide">
          <div class="project-card">
            <img src="images/project3.png" alt="CT World" />
            <div class="project-content">
              <h3>CT WORLD</h3>
              <p>Architecture students visit for a live study on Group Housing Design.</p>
              <ul>
                <li>✅ 20 Students Participated</li>
                <li>✅ Real-world Planning Principles</li>
                <li>✅ Hands-on Learning Experience</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Add more project slides as needed -->
        

       
      </div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    grabCursor: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    }
  });
</script>

</body>
</html>
