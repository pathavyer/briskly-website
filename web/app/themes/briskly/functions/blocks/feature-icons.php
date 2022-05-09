<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'feature-icons',
	'title'           => __( 'Feature Icons', 'briskly' ),
	'description'     => __( 'Feature, Icons, and content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'icons', 'icon content' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );