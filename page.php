<?php
get_header();
?>

<!-- Blog starts -->
<section id="single-post">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- Single Blog Post -->
        <div class="single_post">
          <?php get_template_part('template-parts/content'); ?>
          <!-- Comments Area -->
          <div id="comment_area" <?php comment_class(); ?>id="comment-<?php comment_ID()?>">
            <?php (comments_template());?>
          </div>
        </div>
      </div>
      <!--Sidebar   -->
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
        <h4>Template: page.php</h4>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>