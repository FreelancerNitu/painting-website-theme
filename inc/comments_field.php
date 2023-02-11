<?php

function painting_comments_filed($fields){
  $author = $fields['author'];
  $email = $fields['email'];
  $url = $fields['url'];
  $comment = $fields['comment'];
  $cookies = $fields['cookies'];
  
  unset ($fields['name']);
  unset ($fields['email']);
  unset ($fields['url']);
  unset ($fields['comment']);
  unset ($fields['cookies']);
  
  $fields['name'] = $name;
  $fields['email'] = $email;
  $fields['url'] = $url;
  $fields['comment'] = $comment;
  $fields['cookies'] = $cookies;
  
  return $fields;
}
add_filter('comment_form_fields', 'painting_comments_filed');










?>