<?php
get_header();
/*
 *Template Name: Home 
 */
?>
<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 bg-hero" style="margin-bottom: 90px;">
  <div class="container py-5">
    <div class="row justify-content-start">
      <?php 
      $config = get_option('painting_options');
      ?>
      <div class="col-lg-8 text-center text-lg-start">
        <h1 class="display-1 text-dark"><?php echo $config['hero_title'];?></h1>
        <p class="fs-4 text-dark mb-4"><?php echo $config['hero_desc'];?></p>
        <div class="pt-2">
          <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mx-2"><?php echo $config['quote_btn'];?></a>
          <a href="contact-us"
            class="btn btn-outline-secondary rounded-pill py-md-3 px-md-5 mx-2"><?php echo $config['contact_btn'];?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->


<!-- About Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="row gx-0 mb-3 mb-lg-0">
      <div class="col-lg-6 my-lg-5 py-lg-5">
        <?php
        $config = get_option('painting_options');
        ?>
        <div class="about-start bg-primary p-5">
          <h1 class="display-5 mb-4"><?php echo $config['wlc_title']; ?></h1>
          <p><?php echo $config['wlc_desc']; ?></p>
          <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4"> <?php echo $config['wlc_btn']; ?></a>
        </div>
      </div>
      <div class="col-lg-6" style="min-height: 400px;">
        <?php
        $config = get_option('painting_options');
        ?>
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100" src="<?php echo $config['wlc_fimg']['url']; ?>"
            style="object-fit: cover;">
        </div>
      </div>
    </div>
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
          <div class="service-icon p-3">
            <div>
              <?php the_post_thumbnail ();?>
            </div>
          </div>
          <h3 class="mt-5"><?php the_title(); ?>
          </h3>
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


<!-- Quote Start -->
<div class="container-fluid bg-primary bg-quote py-5" style="margin: 90px 0;">
  <div class="container py-5">
    <div class="row g-0 justify-content-start">
      <div class="col-lg-6">
        <div class="bg-white text-center p-5">
          <h1 class="mb-4">Get A Quote</h1>
          <?php echo do_shortcode('[contact-form-7 id="88" title="Get A Quote]');?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Quote End -->


<!-- Team Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
      <h1 class="display-5">Dedicated Team Members</h1>
      <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
    </div>
    <div class="row g-3">
      <?php
      $args = array(
        'post_type' => 'team',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'menu_order',
      );
      $t_query = new WP_Query( $args);
      while($t_query->have_posts()){
        $t_query->the_post();
        $team_facebook = get_field('team_facebook');
        $team_twitter = get_field('team_twitter');
        $team_linkdin = get_field('team_linkdin');
        ?>
      <div class="col-lg-4 col-md-6">
        <div class="team-item">
          <?php the_post_thumbnail(); ?>
          <div class="team-text">
            <div class="team-social">
              <?php
              if($team_facebook){
                ?>
              <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2"
                href="<?php echo $team_facebook; ?>"><i class="fab fa-facebook-f"></i></a>

              <?php } ?>

              <?php
              if($team_linkdin){
                ?>
              <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2"
                href="<?php echo $team_linkdin; ?>"><i class="fab fa-linkedin-in"></i></a>
              <?php } ?>

              <?php
              if($team_twitter){
                ?>
              <a class="btn btn-lg btn-secondary btn-lg-square rounded-circle me-2"
                href="<?php echo $team_twitter; ?>"><i class="fab fa-twitter"></i>
              </a>
              <?php } ?>

            </div>
            <div class="mt-auto mb-3">
              <h4 class="mb-1"><?php the_title(); ?>
              </h4>
              <span class="text-uppercase"><?php the_content(); ?></span>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</div>
<!-- Team End -->


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


<!-- Blog Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="text-center mx-auto mb-5" style="max-width: 500px;">
      <h1 class="display-5">Latest Articles From Painting Blog</h1>
      <hr class="w-25 mx-auto text-primary" style="opacity: 1;">
    </div>
    <div class="row g-3">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'ASC'
      );
      $p_query = new WP_Query($args);
      while($p_query->have_posts()){
        $p_query->the_post();
        ?>
      <div class="col-xl-4 col-lg-6">
        <div class="blog-item bg-primary">
          <a href="<?php the_permalink();?>"> <?php the_post_thumbnail(); ?></a>
          <div class="d-flex align-items-center">
            <div class="bg-secondary mt-n4 d-flex flex-column flex-shrink-0 justify-content-center text-center me-4"
              style="width: 60px; height: 100px;">
              <i class="fa fa-calendar-alt text-primary mb-2"></i>
              <p class="m-0 text-white"><?php echo the_time('M j');?>
              </p>
              <small class="text-white"><?php echo the_time('Y');?></small>
            </div>
            <a class="h4 m-0 text-truncate me-4" href="<?php the_permalink();?>"><?php the_title();?></a>
          </div>
          <div class="d-flex justify-content-between border-top border-secondary p-4">
            <div class="d-flex align-items-center">
              <img class="rounded-circle me-2" src="<?php echo get_template_directory_uri()?>/img/user.jpg" width="30"
                height="30" alt="">
              <small class="text-uppercase">John Doe</small>
            </div>
            <div class="d-flex align-items-center">
              <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>
                <?php echo getPostViews(get_the_ID());?>
              </small>
              <small class="ms-3"><i
                  class="fa fa-comment text-secondary me-2"></i><?php echo get_comments_number($post->ID);?></small>
            </div>
          </div>
        </div>
      </div>
      <?php }
      wp_reset_postdata();
      ?>

    </div>
  </div>
</div>
<!-- Blog End -->


<!-- Call To Action Start -->
<?php
get_template_part('template-parts/call-action');
?>
<!-- Main Footer -->
<?php
get_footer();
?>