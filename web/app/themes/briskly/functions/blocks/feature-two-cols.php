<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'feature-two-cols',
	'title'           => __( 'Feature Two Columns', 'briskly' ),
	'description'     => __( 'Title, image, and content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'two cols', 'columns' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );