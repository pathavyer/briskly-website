<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'call-to-action',
	'title'           => __( 'Call to action', 'briskly' ),
	'description'     => __( 'Title, image, and accordion content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'call to action', 'action' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );