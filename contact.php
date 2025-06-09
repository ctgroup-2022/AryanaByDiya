
 <?php include('navbar.php'); ?>
<style>
 .neon-input {
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid #00f7ff;
  color: #fff;
  border-radius: 10px;
  padding: 15px;
  transition: 0.3s;
}
.neon-input::placeholder {
  color: #bbb;
}
.neon-input:focus {
  outline: none;
  border-color: #0ff;
  box-shadow: 0 0 10px #00f7ff;
}

.btn-neon {
  background: transparent;
  border: 2px solid #00f7ff;
  color: #00f7ff;
  transition: all 0.4s ease;
  font-weight: bold;
}
.btn-neon:hover {
  background: #00f7ff;
  color: #1b1b2f;
  box-shadow: 0 0 15px #00f7ff;
}


</style>


<!-- ======= Creative Contact Section ======= -->
<section id="contact" style="background: radial-gradient(ellipse at top, #1b1b2f, #1f4068); padding: 100px 0; font-family: 'Poppins', sans-serif;">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <h1 style="color: #00f7ff; font-size: 3rem; font-weight: 700; margin-top:30px;">Get In Touch</h1>
        <p style="color: #ccc; font-size: 1.1rem;">Let's build something extraordinary together. Reach out for projects, collaborations or questions.</p>
      </div>
    </div>

    <div class="row justify-content-center align-items-stretch">
      <!-- Contact Info -->
      <div class="col-lg-5 mb-4">
        <div class="contact-info-box" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 20px; padding: 30px; color: #fff; box-shadow: 0 0 20px rgba(0, 255, 255, 0.1);">
          <h3 style="color: #00f7ff; font-weight: 600;">Contact Information</h3>
          <p><i class="fas fa-map-marker-alt" style="color:#00f7ff;"></i> Aryana Software Develoment Cell</p>
          <p><i class="fas fa-envelope" style="color:#00f7ff;"></i> aryana@gmail.com</p>
          <p><i class="fas fa-phone-alt" style="color:#00f7ff;"></i> +91 2222222222</p>
          <div class="social-icons mt-4">
            <a href="#" style="color:#00f7ff; margin-right: 15px;"><i class="fab fa-facebook-f"></i></a>
            <a href="#" style="color:#00f7ff; margin-right: 15px;"><i class="fab fa-instagram"></i></a>
            <a href="#" style="color:#00f7ff;"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="form-glass p-4 p-lg-5" style="background: rgba(255,255,255,0.07); backdrop-filter: blur(10px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.15); box-shadow: 0 0 40px rgba(0, 255, 255, 0.15);">
          <form action="forms/book-a-table.php" method="post" class="php-email-form">
            <div class="row g-4">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control neon-input" placeholder="Your Name" required>
              </div>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control neon-input" placeholder="Your Email" required>
              </div>
              <div class="col-md-12">
                <input type="text" name="phone" class="form-control neon-input" placeholder="Your Phone" required>
              </div>
              <div class="col-md-12">
                <textarea name="message" class="form-control neon-input" rows="5" placeholder="Your Message" required></textarea>
              </div>
              <div class="col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-neon px-5 py-3 rounded-pill">Submit</button>
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>

