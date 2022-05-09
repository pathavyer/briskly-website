<?php
/// modify the path to the icons directory
add_filter('acf_icon_path_suffix', function ($path_suffix) {
	return '../../../../../src/assets/icons/';
	}
);

// modify the path to the above prefix
add_filter('acf_icon_path', function ($path_suffix) {
	return __DIR__;
}
);

// modify the URL to the icons directory to display on the page
add_filter('acf_icon_url', function ($path_suffix) {
	return get_stylesheet_directory_uri();
}
);			

				
