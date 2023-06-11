<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'multi-col-features',
	'title'           => __( 'Multi-Col Features', 'briskly' ),
	'description'     => __( 'Feature contents', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'columns', 'features' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );