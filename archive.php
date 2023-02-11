<?php
/*
* The Template For Archive
* Actualy Archive Template For Category & Post
*/ 
get_header();
?>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="archive_title">
          <?php the_archive_title('<h1 class="title">', '</h1>');?>
          <?php the_archive_description('<div class="description">', '</div>'); ?>
        </div>
        <?php get_template_part('template_parts/blog-setup'); ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Template: Archive.php</h4>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>