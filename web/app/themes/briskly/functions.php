<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

/**
 * If you are installing Timber as a Composer dependency in your theme, you'll need this block
 * to load your dependencies and initialize Timber. If you are using Timber via the WordPress.org
 * plug-in, you can safely delete this block.
 */
// $composer_autoload = __DIR__ . '/../../../../vendor/autoload.php';
$composer_autoload = __DIR__ . '/../../../../vendor/autoload.php';

if (file_exists($composer_autoload)) {
  require_once $composer_autoload;
  $timber = new Timber\Timber();
}

  

// if (file_exists($composer_autoload)) {
//   $timber = new Timber\Timber();
  
//   if (class_exists('Timber')) {
//     // $timber = new Timber\Timber();
// 		//If timber exsist - load Timber ACF Block
//     if (class_exists('Timber_Acf_Wp_Blocks')) {
//       new Timber_Acf_Wp_Blocks();
//     }
//   }
// }


/**
 * This ensures that Timber is loaded and available as a PHP class.
 * If not, it gives an error message to help direct developers on where to activate
 */
if (!class_exists('Timber')) {
    add_action('admin_notices', function () {
      echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' .
            esc_url(admin_url('plugins.php#timber')) .
            '">' .
            esc_url(admin_url('plugins.php')) .
            '</a></p></div>';
    });

    add_filter('template_include', function ($template) {
      return get_stylesheet_directory() . '/no-timber.html';
    });

    return;
}

Timber::$dirname = ['dist/views', 'dist'];
 

// Cache-control on non-development environments:
if (getenv('ENVIRONMENT_TYPE') != 'development') {
	/**
	 * Change Timber's cache folder.
	 * We want to use wp-content/cache/timber
	 */
	function custom_change_twig_cache_dir() {
		return WP_CONTENT_DIR . '/cache/timber';
	}
  
	Timber::$cache = TRUE;
	add_filter( 'timber/cache/location', 'custom_change_twig_cache_dir' );
}

/**
 * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
 * No prob! Just set this value to true
 */
Timber::$autoescape = false;

/**
 * We're going to configure our theme inside of a subclass of Timber\Site
 * You can move this to its own file and include here via php's include("MySite.php")
 */
class BrisklySite extends Timber\Site
{
    /** Add timber support. */
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'theme_supports']);
        add_filter('timber/context', [$this, 'add_to_context']);
        add_filter('timber/twig', [$this, 'add_to_twig']);
        add_action('init', [$this, 'register_post_types']);
        add_action('init', [$this, 'register_taxonomies']);
        add_filter('acf/settings/save_json', [$this, 'acf_json_save_point']);
				add_filter('acf/settings/load_json', [$this, 'acf_json_load_point']);
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'remove_wp_block_library_css'], 100);
        // Render blocks
        require_once( get_template_directory() . '/functions/register_acf_blocks.php' );
		    require_once( get_template_directory() . '/functions/render_acf_blocks.php' );
        // Load each block file
        foreach(scandir(get_template_directory() . '/functions/blocks/') as $block ) {
          if (strstr($block, '.php')) {
            require_once( get_template_directory() . '/functions/blocks/' . $block );
          }
        }

        parent::__construct();
    }
    /** This is where you can register custom post types. */
    public function register_post_types(){}
    /** This is where you can register custom taxonomies. */
    public function register_taxonomies(){}


    /** Sync - SAVE ACF Json files */
		public function  acf_json_save_point($path)
		{
				// update path
				$path = get_stylesheet_directory() . '/acf-json';
						
				// return
				return $path;
		}

		/** Sync - LOAD ACF Json files */
		public function acf_json_load_point($paths)
		{
				// remove original path (optional)
				unset($paths[0]);
				// append path
				$paths[] = get_stylesheet_directory() . '/acf-json';
				// return
				return $paths;
		}

		/** Disable wordpress default style */
		//REMOVE GUTENBERG BLOCK LIBRARY CSS FROM LOADING ON FRONTEND
		public function remove_wp_block_library_css()
		{
			wp_dequeue_style( 'wp-block-library' );
			wp_dequeue_style( 'wp-block-library-theme' );
			wp_dequeue_style( 'wc-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
			wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
			
		}

    /** This is where you add some context
    *
    * @param string $context context['this'] Being the Twig's {{ this }}.
    */
    public function add_to_context($context)
    {
        $context['foo'] = 'bar';
        $context['stuff'] = 'I am a value set in your functions.php file';
        $context['notes'] = 'These values are available everytime you call Timber::context();';
        // $context['menu'] = new Timber\Menu();
        $context['primary_menu'] = new Timber\Menu('Primary Navigation');
				$context['footer_menu'] = new Timber\Menu('Footer Navigation');
				$context['legal_menu'] = new Timber\Menu('Legal Menu');
				$context['site'] = $this;
        return $context;
    }

    public function theme_supports()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        //add_theme_support('post-formats', [
        //    'aside',
        //    'image',
        //    'video',
        //    'quote',
        //    'link',
        //    'gallery',
        //    'audio',
        //]);

        add_theme_support('menus');
    }

    /** This Would return 'foo bar!'.
     *
     * @param string $text being 'foo', then returned 'foo bar!'.
     */
    public function myfoo($text)
    {
        $text .= ' bar!';
        return $text;
    }

    /** This is where you can add your own functions to twig.
     *
     * @param string $twig get extension.
     */
    public function add_to_twig($twig)
    {
        $twig->addExtension(new Twig\Extension\StringLoaderExtension());
        $twig->addFilter(new Twig\TwigFilter('myfoo', [$this, 'myfoo']));
        return $twig;
    }

    public function enqueue_scripts() {
        wp_enqueue_style('style',
					get_template_directory_uri() . '/dist/style.css',
          [],
					$this->get_file_hash('/dist/style.css')
        );
        wp_enqueue_script(
          'scripts',
          get_template_directory_uri() . '/dist/script.js',
          [],
          $this->get_file_hash('/dist/script.js'),
          true
        );
    }

    public static function get_file_hash($file)
    {
      $hash = @md5_file(get_template_directory() . $file);
      if ($hash) {
        return $hash;
      }

      return null;
    }

}

new BrisklySite();
