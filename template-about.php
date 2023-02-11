<?php
/*
Template Name: About Us
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
          <a href="" class="btn btn-secondary rounded-pill py-md-3 px-md-5 mt-4">
            <?php echo $config['wlc_btn']; ?></a>
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
        <h4>Template: About.php</h4>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>