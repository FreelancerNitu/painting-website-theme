<?php
require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';


function painting_activation(){
  $plugins = array(
    array(
     'name'  =>__('Advanced Custom Fields', 'painting'),
     'slug' => 'advanced-custom-fields',
     'required' => true,
    ),
    array(
      'name' =>__('Codestar Framework','painting'),
      'slug' => 'codestar-framework',
      'source' => 'https://github.com/Codestar/codestar-framework/archive/master.zip',
      'required' => true,
     ),
     array(
      'name' =>__('Painting Custom Post Types','painting'),
      'slug' => 'painting-custom-post-types',
      'source' => 'https://github.com//FreelancerNitu/painting-custom-post-types/archive/refs/heads/main.zip',
      'required' => true,
     ),
     array(
      'name'  =>__('Contact Form 7', 'painting'),
      'slug' => 'contact-form-7',
      'required' => true,
     ),
  );
  
  $config = array(
    'id' => 'painting_plugins_activation',
    'menu' => 'painting-plugins-activation',
    'parent_slug' => 'themes.php',
    'has_notices' => true,
  );
  
  tgmpa( $plugins, $config);
}
add_action('tgmpa_register', 'painting_activation');