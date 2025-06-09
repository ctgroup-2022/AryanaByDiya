
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #0f172a;
      color: white;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(135deg, #1e293b, #0f172a);
      padding: 40px 20px;
      text-align: center;
    }

    header h1 {
      font-size: 2.5rem;
      font-weight: bold;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    nav {
      display: flex;
      justify-content: center;
      gap: 30px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    nav a {
      color:#38bdf8;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ffffff;
    }

    section {
      padding: 60px 20px;
      max-width: 900px;
      margin: auto;
    }

    section h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
    }

    section h2::after {
      content: "";
      width: 60px;
      height: 4px;
      background: #38bdf8;
      position: absolute;
      bottom: -10px;
      left: 0;
    }

    .card {
      background: #1e293b;
      border-left: 6px solid #38bdf8;
      padding: 25px;
      margin-top: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 255, 255, 0.1);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .dev-message {
      background: #1e293b;
      border-left: 4px solid #38bdf8;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      box-shadow: 0 4px 15px rgba(0, 212, 255, 0.08);
      transition: transform 0.3s ease;
    }

    .dev-message:hover {
      transform: translateY(-5px);
    }

    .dev-name {
      font-weight: bold;
      color: #38bdf8;
      margin-bottom: 8px;
    }

    footer {
      background: #1e1e2f;
      text-align: center;
      padding: 25px 15px;
      font-size: 0.9rem;
      color: #aaa;
      margin-top: 60px;
    }

    @media (max-width: 600px) {
      header h1 {
        font-size: 1.8rem;
      }

      nav {
        gap: 15px;
      }

      section h2 {
        font-size: 1.5rem;
      }

      .card {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Aryana Development Cell</h1>
    <nav>
      <a href="#about">About Us</a>
      <a href="#mission">Mission</a>
      <a href="#vision">Vision</a>
      
    </nav>
  </header>

  <section id="about">
    <h2>About Us</h2>
    <div class="card">
      <p>The Aryana Development Cell at CT Group is more than just a student club — it’s a vibrant innovation hub where creativity meets technology. Formed by a passionate team of student developers, designers, and thinkers, Aryana is dedicated to crafting real-world digital solutions that empower institutions, businesses, and communities.

At its core, Aryana fosters a culture of collaborative learning, problem-solving, and hands-on innovation. Whether it's building dynamic websites, crafting mobile apps, developing internal tools, or automating processes — we believe in transforming raw ideas into meaningful digital products that make a difference.

With mentorship from industry experts and faculty, our team works on live, client-based projects that reflect current industry standards and emerging tech trends. This hands-on experience equips our members with practical development skills, professional work ethics, and the confidence to lead in the tech world.</p>
    </div>
  </section>

  <section id="mission">
    <h2>Our Mission</h2>
    <div class="card">
      <p>Our mission at the Aryana Software Development Cell is to nurture, empower, and elevate the next generation of innovators by providing a platform rooted in real-world experiences and continuous learning. We strive to unlock the full potential of students by immersing them in hands-on software development, creative design thinking, and agile project management.

At Aryana, we believe that learning by doing is the most powerful form of education. That’s why our mission is built around offering opportunities to work on live projects, tackle industry-relevant challenges, and develop problem-solving mindsets that extend far beyond the classroom.</p>
    </div>
  </section>

  <section id="vision">
    <h2>Our Vision</h2>
    <div class="card">
      <p>Our vision at the Aryana Software Development Cell is to become a pioneering force in academic-industry collaboration, where student innovation thrives and real-world impact begins. We aspire to create an environment where education transcends theory, and students are empowered to become the leaders, creators, and disruptors of tomorrow’s digital landscape.

We envision Aryana as a launchpad for emerging talent — a space where creativity merges seamlessly with code, and where every project serves as a step toward shaping the future of technology. Through a strong focus on practical development, entrepreneurship, and design excellence, we aim to bridge the gap between classrooms and companies, helping students evolve into confident professionals who think critically, build boldly, and innovate responsibly.</p>
    </div>
  </section>

  

  <footer>
    &copy; 2025 Aryana Development Cell, CT Group. All rights reserved.
  </footer>

  <script>
    // Reveal animation for cards and dev messages
    document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll(".card, .dev-message");
      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = "translateY(0)";
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });

      elements.forEach(el => {
        el.style.opacity = 0;
        el.style.transform = "translateY(50px)";
        observer.observe(el);
      });
    });
  </script>

</body>

