<?php
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

<!-- Blog starts -->
<section id="single-post">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- Single Post -->
        <div class="single_post">
          <?php get_template_part('template-parts/a-setup', get_post_format() ); ?>
          <!-- Comments Area -->
          <div id="comment_area" <?php comment_class(); ?>id="comment-<?php comment_ID()?>">
            <?php (comments_template());?>
          </div>
        </div>
      </div>
      <!-- Sidebar -->
      <div class="col-md-4">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>
</section>


<!-- Template Name -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Template: Single.php</h4>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>