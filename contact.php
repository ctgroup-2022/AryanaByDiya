<?php include('navbar.php'); ?>
 <!-- ======= Contact Us Section ======= -->
 <section id="book-a-table" class="book-a-table">
 <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
        <div class="col-lg-12 text-center rounded-pill" style="background-color: yellow; height: 130px; margin-top:90px;">
            <h1 style="font-weight: bolder; color:black; font-size: calc(1.9rem + 1vw); margin-top: calc(1rem + 1vw);">Contact Us</h1>
          </div>
        </div>
       </div>




      <div class="container" data-aos="fade-up">

        <div class="section-title">
         
         
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            
           
            
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>

      </div>
    </section><!-- End Contact Us Section -->
<?php include('footer.php'); ?>