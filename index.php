<?php
/*
Template Name: Blog
*/ 
get_header();
global $wp_query;
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
        'posts_per_page' => -1,
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
              <small class="ms-3"><i class="fa fa-eye text-secondary me-2"></i>12345</small>
              <small class="ms-3"><i
                  class="fa fa-comment text-secondary me-2"></i><?php echo get_comments_number($post->ID);?>
              </small>
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
<!-- Call To Action Start -->

<!-- Template Name -->
<section>
  <div class=" container">
    <div class="row">
      <div class="col-md-12">
        <h4>Template: index.php</h4>
      </div>
    </div>
  </div>
</section>
<!-- Main Footer -->
<?php
get_footer();
?>