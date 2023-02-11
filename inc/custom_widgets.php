<?php
// Custom Widgets
function painting_custom_widget(){
  
  register_sidebar( array(
    'name' =>__('Main Sidebar Area', 'painting'),
    'id' => 'sidebar-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'painting'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="title text-primary">',
    'after_title' => '</h4>',
  ));
  register_sidebar( array(
    'name' =>__('Footer 1', 'painting'),
    'id' => 'footer-1',
    'description' => __('Footer Widgets for all page', 'painting'),
    'before_widget' => '<div class="footer_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="text-primary">',
    'after_title' => '</h4>',
  ));
  register_sidebar( array(
    'name' =>__('Footer 2', 'painting'),
    'id' => 'footer-2',
    'description' => __('Footer Widgets for all page', 'painting'),
    'before_widget' => '<div class="footer_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="text-primary">',
    'after_title' => '</h4>',
  ));
  register_sidebar( array(
    'name' =>__('Footer 3', 'painting'),
    'id' => 'footer-3',
    'description' => __('Footer Widgets for all page', 'painting'),
    'before_widget' => '<div class="footer_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="text-primary">',
    'after_title' => '</h4>',
  ));
  register_sidebar( array(
    'name' =>__('Footer 4', 'painting'),
    'id' => 'footer-4',
    'description' => __('Footer Widgets for all page', 'painting'),
    'before_widget' => '<div class="footer_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="text-primary">',
    'after_title' => '</h4>',
  ));
}
add_action('widgets_init', 'painting_custom_widget');
?>