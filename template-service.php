<?php
/*
Template Name: Service
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

<!-- Services Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
      <h1 class="display-5">Professional Painting Services</h1>
      <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
    </div>
    <div class="row gy-4 gx-3">
      <?php
        $args = array(
          'post_type' => 'service',
          'posts_per_page' => 6,
        );
        $query = new WP_Query($args);
        while($query->have_posts()){
          $query->the_post();
        
        $service_icon = get_field('service_icon');
      ?>
      <div class="col-lg-4 col-md-6 pt-5">
        <div class="service-item d-flex flex-column align-items-center justify-content-center text-center p-5 pt-0">
          <!-- <img src="<?php echo get_template_directory_uri()?>./img/blog-3.jpg" alt=""> -->
          <div class="service-icon p-3">
            <div><i class="fa fa-2x fa-paint-brush"></i></div>
          </div>
          <h3 class="mt-5"><?php the_title(); ?></h3>
          <a class="btn shadow-none text-secondary" href="<?php the_permalink();?>">View
            Detail<i class="bi bi-arrow-right ms-1"></i></a>

        </div>
      </div>
      <?php } ?>
    </div>
    <!-- <div class="text-center mx-auto">
      <a href="<?php print site_url()?>/service" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">View
        All
        Service</a>
    </div> -->

  </div>
</div>
<!-- Services End -->

<!-- Testimonial Start -->
<div class="container-fluid bg-primary bg-testimonial py-5" style="margin: 90px 0;">
  <div class="container py-5">
    <div class="row g-0 justify-content-end">
      <div class="col-lg-6">
        <h1 class="display-5 mb-4">Testimonials</h1>
        <div class="owl-carousel testimonial-carousel">

          <?php
          $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => -1,
            'order' => 'ASC',
          );
          $t_query = new WP_Query($args);
          while($t_query->have_posts()){
            $t_query->the_post();
            $client_profession = get_field('client_profession');
            ?>
          <div class="testimonial-item">
            <p class="fs-4 fw-normal"><i class="fa fa-quote-left text-secondary me-3"></i><?php the_content();?>.
            </p>
            <div class="d-flex align-items-center">
              <?php the_post_thumbnail ();?>
              <div class="ps-3">
                <h3><?php the_title();?>
                </h3>
                <span class="text-uppercase"><?php echo $client_profession; ?></span>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->


<!-- About Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="row gx-0">
      <div class="col-lg-6" style="min-height: 400px;">
        <?php
        $config = get_option('painting_options');
        ?>
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100" src="<?php echo $config['ch_fimg']['url']; ?>"
            style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-6 my-lg-5 py-lg-5">
        <?php
        $config = get_option('painting_options');
        ?>
        <div class="about-end bg-primary p-5">
          <h1 class="display-5 mb-4"><?php echo $config['ch_title']; ?></h1>
          <p><?php echo $config['ch_desc']; ?></p>
          <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4"><?php echo $config['ch_btn']; ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->


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
        <h4>Template: Service.php</h4>
      </div>
    </div>
  </div>
</section>
<!-- Main Footer -->
<?php
get_footer();
?>