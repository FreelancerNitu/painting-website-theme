<?php
function painting_css_js_file_calling(){
  // CSS File Calling
  wp_enqueue_style('education_style', get_stylesheet_uri());
  wp_register_style( 'owlcarousel', get_template_directory_uri(  ) .'/lib/owlcarousel/assets/owl.carousel.min.css', array(), '2.2.1', 'all');
  wp_register_style( 'owlcarousel-theme', get_template_directory_uri(  ) .'/lib/owlcarousel/assets/owl.theme.default.min.css', array(), '2.2.1', 'all');
  wp_register_style( 'bootstrap', get_template_directory_uri(  ) .'/css/bootstrap.min.css', array(), '5.0.0', 'all');
  wp_register_style( 'style', get_template_directory_uri(  ) .'/css/style.css', array(), '1.0.0', 'all');
  wp_register_style( 'custom', get_template_directory_uri(  ) .'/css/custom.css', array(), '1.0.0', 'all');
 
  wp_enqueue_style('owlcarousel');
  wp_enqueue_style('owlcarousel-theme');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('style');
  wp_enqueue_style('custom');
  
  // Js File Calling
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'owlcarouse-min', get_template_directory_uri(  ) .'/lib/owlcarousel/owl.carousel.min.js', array(), '2.2.1', 'true');
  wp_enqueue_script( 'owlcarouse', get_template_directory_uri(  ) .'/lib/owlcarousel/owl.carousel.js', array(), '2.2.1', 'true');
  wp_enqueue_script( 'easing', get_template_directory_uri(  ) .'/lib/easing/easing.min.js', array(), '1.0.0', 'true');
  wp_enqueue_script( 'waypoint', get_template_directory_uri(  ) .'/lib/waypoints/waypoints.min.js', array(), '4.0.1', 'true');
  wp_enqueue_script( 'main', get_template_directory_uri(  ) .'/js/main.js', array(), '1.0.0', 'true');
 
  
}
add_action('wp_enqueue_scripts', 'painting_css_js_file_calling');
?>