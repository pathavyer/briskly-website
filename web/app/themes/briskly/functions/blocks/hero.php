<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'hero',
	'title'           => __( 'Hero', 'briskly' ),
	'description'     => __( 'Title, image, and content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'hero', 'content' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );