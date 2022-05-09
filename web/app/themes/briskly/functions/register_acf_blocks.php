<?php
/**
 * Add Custom Category for ACF Blocks
 */
function briskly_plugin_block_categories( $categories, $post ) {
	return array_merge(
		$categories, [
  		[
				'slug' => 'briskly-blocks',
				'title' => __( 'Briskly Blocks', 'briskly' ),
				'icon'  => 'wordpress',
      ],
		] );
}

add_filter( 'block_categories_all', 'briskly_plugin_block_categories', 10, 2 );

/**
 * Get ID of the first ACF block on the page to set heading levels on custom blocks
 */
function briskly_get_first_block_id() {
	$post = get_post();

	if(!empty($post->post_content)) {
		if(has_blocks($post->post_content)) {
			$blocks = parse_blocks($post->post_content);
			$first_block_attrs = $blocks[0]['attrs'];

			if(array_key_exists('id', $first_block_attrs)) {
					return $first_block_attrs['id'];
			}
		}
	}
}

/**
 * Set allowed block types on pages/posts/CPTs
 */
function briskly_allowed_block_types( $allowed_blocks, $post ) {
	$post_type = get_post_type( get_the_ID() );

	if($post_type === 'page') {
		$allowed_blocks = array(
			'acf/call-to-action',
			'acf/clients',
			'acf/feature-case-studies',
			'acf/feature-icons',
			'acf/feature-services',
			'acf/feature-two-cols',
			'acf/feature-why',
			'acf/hero',
			'acf/hero-alt',
			'acf/testimonial-carousel',
		);
	} else {
		$allowed_blocks = array(
			'acf/call-to-action',
			'acf/clients',
			'acf/feature-case-studies',
			'acf/feature-icons',
			'acf/feature-services',
			'acf/feature-two-cols',
			'acf/feature-why',
			'acf/hero-alt',
			'acf/testimonial-carousel',
		);
	}
	return $allowed_blocks;
}

add_filter( 'allowed_block_types_all', 'briskly_allowed_block_types', 10, 2 );