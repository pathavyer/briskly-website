<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'slider-cards',
	'title'           => __( 'Slider Cards', 'briskly' ),
	'description'     => __( 'Slider cards features', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'cards', 'slider', 'carousel' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );