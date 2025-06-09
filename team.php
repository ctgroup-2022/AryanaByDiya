<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aryana Dev Team</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #0f172a;
      color: white;
    }

    .team-section {
      padding: 60px 20px;
      text-align: center;
      position: relative;
    }

    .team-section h2 {
      font-size: 2.5rem;
      font-weight: bold;
      background: linear-gradient(90deg, #38bdf8, #f472b6, #facc15);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 40px;
    }

    .team-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .team-card {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(12px);
      padding: 20px;
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .team-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 24px rgba(0, 255, 255, 0.2);
    }

    .team-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      border: 3px solid transparent;
      background: linear-gradient(135deg, #38bdf8, #f472b6, #facc15);
      background-clip: padding-box;
      margin-bottom: 15px;
    }

    .team-name {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .team-role {
      font-size: 0.95rem;
      color: #ccc;
    }

    @media (max-width: 600px) {
      .team-section h2 {
        font-size: 2rem;
      }

      .team-card {
        padding: 16px;
      }
    }
  </style>
</head>
<body>

<section class="team-section" id="team">
  <h2>Meet Our Team</h2>
  <div class="team-container">
    
    <div class="team-card">
      <img src="images/team1.jpg" alt="Team Member 1" class="team-img" />
      <div class="team-name">Vishal Singh</div>
      <div class="team-role">Lead Developer</div>
    </div>

    <div class="team-card">
      <img src="images/team2.jpg" alt="Team Member 2" class="team-img" />
      <div class="team-name">Priya Sharma</div>
      <div class="team-role">UI/UX Designer</div>
    </div>

    <div class="team-card">
      <img src="images/team3.jpg" alt="Team Member 3" class="team-img" />
      <div class="team-name">Rohan Mehta</div>
      <div class="team-role">Frontend Engineer</div>
    </div>

    <div class="team-card">
      <img src="images/team4.jpg" alt="Team Member 4" class="team-img" />
      <div class="team-name">Ananya Gupta</div>
      <div class="team-role">Content Strategist</div>
    </div>

  </div>
</section>

<script>
  // Optional: add entry animation using IntersectionObserver
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".team-card");
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = 1;
          entry.target.style.transform = "translateY(0)";
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    cards.forEach(card => {
      card.style.opacity = 0;
      card.style.transform = "translateY(50px)";
      observer.observe(card);
    });
  });
</script>

</body>
</html>
