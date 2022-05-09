<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'clients',
	'title'           => __( 'Clients', 'briskly' ),
	'description'     => __( 'Client list', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'clients', 'icons' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );