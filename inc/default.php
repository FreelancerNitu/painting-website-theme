<?php
function painting_setup_theme(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails', array('post', 'service', 'team', 'testimonial'));
}
add_action('after_setup_theme', 'painting_setup_theme');
?>