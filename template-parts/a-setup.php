<?php
  if(have_posts()) :
    while(have_posts()) : the_post();
?>


<!-- Blog Start -->

<div class="container">
  <div class="row g-3">
    <!-- Blog Detail Start -->
    <div class="mb-5">
      <a href="<?php the_permalink(); ?>"
        class="img-fluid w-100 mb-5"><?php echo the_post_thumbnail('post-thumbnails'); ?>
      </a>
      <h1 class="title mb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <p><?php the_content();?></p>

    </div>
    <?php
         endwhile;
          else :
        ?>
    <p class="not-found text-center"><?php _e('Not found!')?></p>
    <a class="search-btn" href=" <?php echo site_url()?>">Go Back Home</a>
    <?php
         endif; ?>
    <!-- Blog Detail End -->

  </div>

</div>

<!-- Blog End -->