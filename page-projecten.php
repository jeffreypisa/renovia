<?php
/**
* Template Name: Projecten
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
	

$context = Timber::get_context();

$post = new TimberPost();
$context['post'] = $post;

/* Load categories */

$terms = \Timber::get_terms(array('taxonomy' => 'project_categorie', 'hide_empty' => true));
$context['categories'] = $terms;

$args_projecten = array(
	'post_type'			  => 'projecten',
	'posts_per_page'  => -1
);
	
$context['posts'] = Timber::get_posts($args_projecten);

Timber::render( array( 'page-projecten.twig' ), $context );