<?php
/*
Template Name: Contact Us
*/ 
get_header();
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
  <div class="container py-5">
    <div class="row justify-content-start">
      <?php get_template_part('inc/hero'); ?>
    </div>
  </div>
</div>
<!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <?php
    $config = get_option('painting_options');
    ?>
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
      <h1 class="display-5"> <?php echo $config['contact_heading']; ?></h1>
      <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
    </div>
    <div class="row g-3 mb-5">
      <div class="col-lg-4 col-md-6 pt-5">
        <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
          <div class="contact-icon p-3">
            <div><i class="fa fa-2x fa-map-marker-alt"></i></div>
          </div>
          <h4 class="mt-5"> <?php echo $config['contact_addres']; ?></h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-5">
        <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
          <div class="contact-icon p-3">
            <div><i class="fa fa-2x fa-phone"></i></div>
          </div>
          <h4 class="mt-5"> <?php echo $config['contact_phone']; ?></h4>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-5">
        <div class="contact-item d-flex flex-column align-items-center justify-content-center text-center pb-5">
          <div class="contact-icon p-3">
            <div><i class="fa fa-2x fa-envelope-open"></i></div>
          </div>
          <h4 class="mt-5"><?php echo $config['contact_email']; ?></h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12" style="height: 500px;">
        <div class="position-relative h-100">
          <?php
          $google_map = $config['contact_map'];
          ?>
          <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps?q=<?php echo $google_map['latitude']; ?>,
          <?php echo $google_map['longitude'];?>&z=15&output=embed">
          </iframe>
        </div>
      </div>
    </div>
    <div class="row justify-content-center position-relative" style="margin-top: -200px; z-index: 1;">
      <div class="col-lg-8">
        <div class="bg-primary p-5 m-5 mb-0">
          <!-- <form>
            <div class="row g-3">
              <div class="col-12 col-sm-6">
                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
              </div>
              <div class="col-12 col-sm-6">
                <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                  style="height: 55px;">
              </div>
              <div class="col-12">
                <input type="text" class="form-control bg-light border-0" placeholder="Subject" style="height: 55px;">
              </div>
              <div class="col-12">
                <textarea class="form-control bg-light border-0" rows="5" placeholder="Message"></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-secondary w-100 py-3" type="submit">Send Message</button>
              </div>
            </div>
          </form> -->
          <?php echo do_shortcode('[contact-form-7 id="126" title="Main Contact From"]'); ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact End -->

<!-- Call To Action Start -->
<?php
get_template_part('template-parts/call-action');
?>
<!-- Call To Action Start -->

<!-- Template Name -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Template: Contact.php</h4>
      </div>
    </div>
  </div>
</section>

<!-- Main Footr -->
<?php
get_footer();
?>