<?php

// Accordion Image
acf_register_block( array(
	'name'            => 'testimonial-carousel',
	'title'           => __( 'Testimonial Carousel', 'briskly' ),
	'description'     => __( 'Title, image, carousel, and content', 'briskly' ),
	'render_callback' => 'briskly_acf_block_render_callback',
	'category'        => 'briskly-blocks',
	'icon'            => 'align-left',
	'keywords'        => array( 'briskly', 'carousel', 'testimonial' ),
	'mode'            => 'edit',
	'align'			      => 'wide',
) );