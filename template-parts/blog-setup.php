<?php
  if(have_posts()) :
    while(have_posts()) : the_post();
?>

<div class="blog_area">
  <div class="post_thumb">
    <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?>
    </a>
  </div>
  <div class="post-details">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="date-time"><i class=" fas fa-calendar"></i> <?php echo the_time('D, j-F, Y');?>
      <span>at</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?>
    </p>
    <?php the_content();?>
  </div>
</div>
<?php
 endwhile;
  else :
    ?>
<p class="not-found text-center"><?php _e('Not found!')?></p>
<a class="search-btn" href=" <?php echo site_url()?>">Go Back Home</a>
<?php
 endif; ?>