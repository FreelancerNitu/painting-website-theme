<div class="col-lg-8 text-center text-lg-start">
  <?php
       while(have_posts()){
        the_post();
        ?>
  <h1 class="display-1 text-dark"><?php the_title(); ?></h1>
  <div class="pt-2">
    <a href="<?php echo site_url();?>" class="btn btn-secondary rounded-pill py-2 px-4 mx-2">Home</a>
    <a href="" class="btn btn-secondary rounded-pill py-2 px-4 mx-2"><?php the_title();?></a>
  </div>
  <?php } ?>
</div>