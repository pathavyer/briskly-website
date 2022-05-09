<?php

/**
 * Render ACF Blocks
 */
function briskly_acf_block_render_callback( $block, $content = '', $is_preview = false ) {
	$slug = str_replace( 'acf/', '', $block['name'] );
	$context = Timber::context();
	$context['slug'] = $slug;
	$context['block'] = $block;
	$context['is_preview'] = $is_preview;
	$context['fields'] = get_fields();
	$context['title'] = get_field('title');

  // Create class attribute allowing for custom "className" and "align" values.
	if( !empty($block['className']) ) {
		$context['block_classes'] = ' ' . $block['className'];
	}

	$templates = ['blocks/' . $slug . '.twig', 'blocks/default.twig' ];
	// $function = $slug . '_block_render_callback';
	// if (function_exists($function)) {
	// 	$function($block, $context);
	// }
  Timber::render( $templates, $context );
}