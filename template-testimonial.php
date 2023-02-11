<?php
/*
Template Name: Testimonial
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


<!-- Testimonial Start -->
<div class="container-fluid bg-primary bg-testimonial py-5" style="margin: 90px 0;">
  <div class="container py-5">
    <div class="row g-0 justify-content-end">
      <div class="col-lg-6">
        <h1 class="display-5 mb-4">Testimonials</h1>
        <div class="owl-carousel testimonial-carousel">

          <?php
          $t_args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => -1,
            'order' => 'ASC',
          );
          $t_query = new WP_Query($t_args);
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


<!-- Call To Action Start -->
<?php 
   get_template_part('template-parts/call-action');
   ?>
<!-- Call To Action Start -->

<!-- Main Footer -->
<?php
  get_footer();
?>