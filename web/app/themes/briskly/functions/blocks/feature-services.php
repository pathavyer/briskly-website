<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'feature-services',
	'title'           => __( 'Feature Services', 'briskly' ),
	'description'     => __( 'Feature, icon, and content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'services', 'feature' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );