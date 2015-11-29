<?php

$data = Timber::get_context();
$post = new TimberPost();
$data['post'] = $post;

$args = array(
  'post_type' => 'project'
);
$data['postTypeName'] = Timber::get_posts($args);

Timber::render( array( 'page-test.twig' ), $data );