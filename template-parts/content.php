<h2><?php the_title(); ?></h2>
<?php the_post_thumbnail(); ?>
<p><?php the_content(); ?></p>
<div class="comments">
  <?php if ( (is_single() || is_page()) && (comments_open() || get_comments_number() ) && ! post_password_required() ){
		comments_template();
	}
 ?>
</div>