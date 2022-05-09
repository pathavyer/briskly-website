<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'feature-case-studies',
	'title'           => __( 'Feature Case Studies', 'briskly' ),
	'description'     => __( 'Case Studies, and Featured content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'call to action', 'action' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );