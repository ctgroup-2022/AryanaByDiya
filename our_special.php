<section id="specials" class="specials-section">
  <div class="container">
    <div class="section-header">
      <h2>Specials</h2>
      <p>What Sets Us Apart</p>
    </div>

    <div class="specials-wrapper">
      <div class="specials-tabs">
        <button class="tab-link active" data-tab="tab-1">Proficiency in Multiple Languages</button>
        <button class="tab-link" data-tab="tab-2">Data Structures & Algorithms</button>
        <button class="tab-link" data-tab="tab-3">Software Design Patterns</button>
      </div>

      <div class="specials-content">
        <div class="tab-pane active" id="tab-1">
          <div class="content-card">
            <div class="text">
              <h3>Proficiency in Multiple Programming Languages</h3>
              <p>
                Beyond the basics, being adept in specialized languages for specific domains like machine learning, data science, or embedded systems. While it may take
                effort and time to become proficient in multiple programming languages, it is entirely achievable and can be beneficial for your career in tech.
              </p>
            </div>
           
          </div>
        </div>

        <div class="tab-pane" id="tab-2">
          <div class="content-card">
            <div class="text">
              <h3>Deep Knowledge of Data Structures & Algorithms</h3>
              <p>
                Data Structures is about how data can be stored in different structures. Algorithms is about how to solve different problems by
                searching through and manipulating data structures. This knowledge helps us solve real-world problems efficiently.
              </p>
            </div>
            
          </div>
        </div>

        <div class="tab-pane" id="tab-3">
          <div class="content-card">
            <div class="text">
              <h3>Expertise in Software Design Patterns</h3>
              <p>
                Design patterns help tackle recurring software design challenges. These practices allow engineers to write more structured,
                manageable, and scalable code using standard solutions to common problems.
              </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .specials-section {
    background: #0f172a;
    padding: 80px 20px;
    color: #e2e8f0;
    font-family: 'Poppins', sans-serif;
  }

  .section-header {
    text-align: center;
    margin-bottom: 40px;
  }

  .section-header h2 {
    font-size: 36px;
    color: #38bdf8;
  }

  .section-header p {
    color: #facc15;
    font-size: 18px;
  }

  .specials-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
  }

  .specials-tabs {
    flex: 1 1 250px;
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .tab-link {
    background: transparent;
    color: #cbd5e1;
    padding: 15px 20px;
    border: 1px solid #334155;
    border-radius: 12px;
    text-align: left;
    transition: all 0.3s ease;
    font-weight: 500;
    cursor: pointer;
  }

  .tab-link:hover,
  .tab-link.active {
    background: linear-gradient(135deg, #1e3a8a, #0ea5e9);
    color: #fff;
    border-color: #0ea5e9;
  }

  .specials-content {
    flex: 2 1 600px;
  }

  .tab-pane {
    display: none;
    animation: fadeIn 0.6s ease-in-out;
  }

  .tab-pane.active {
    display: block;
  }

  .content-card {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    background: rgba(255, 255, 255, 0.05);
    padding: 30px;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(56, 189, 248, 0.1);
  }

  .content-card .text {
    flex: 1 1 60%;
  }

  .content-card h3 {
    font-size: 24px;
    color: #38bdf8;
    margin-bottom: 15px;
  }

  .content-card p {
    font-size: 16px;
    color: #e2e8f0;
    line-height: 1.6;
  }

  .content-card .image {
    flex: 1 1 35%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .content-card .image img {
    max-width: 100%;
    border-radius: 12px;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }

  @media (max-width: 768px) {
    .specials-wrapper {
      flex-direction: column;
    }

    .content-card {
      flex-direction: column;
      text-align: center;
    }

    .tab-link {
      text-align: center;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const tabLinks = document.querySelectorAll(".tab-link");
    const tabPanes = document.querySelectorAll(".tab-pane");

    tabLinks.forEach(link => {
      link.addEventListener("click", () => {
        const target = link.getAttribute("data-tab");

        tabLinks.forEach(btn => btn.classList.remove("active"));
        tabPanes.forEach(pane => pane.classList.remove("active"));

        link.classList.add("active");
        document.getElementById(target).classList.add("active");
      });
    });
  });
</script>
