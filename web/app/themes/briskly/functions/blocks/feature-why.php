<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'feature-why',
	'title'           => __( 'Feature Why', 'briskly' ),
	'description'     => __( 'Title, image, and content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'Why', 'feature' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );