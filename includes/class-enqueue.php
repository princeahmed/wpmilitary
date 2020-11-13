<?php


if(!class_exists('WP_Military_Enqueue')){
	class WP_Military_Enqueue{
		/** @var null  */
		private static $instance = null;

		/**
		 * WP_Military_Enqueue constructor.
		 */
		public function __construct() {
			add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
		}

		public function enqueue_scripts(){
			$is_wpradio = 'templates/wp-radio.php' == get_page_template_slug();

			wp_enqueue_style( 'bootstrap',
			                  get_theme_file_uri( "assets/vendor/bootstrap/bootstrap.min.css" ),
			                  false,
			                  '4.5.3' );
			wp_enqueue_style( 'font-awesome',
			                  get_theme_file_uri( "assets/vendor/font-awesome/css/font-awesome.min.css" ),
			                  false,
			                  '4.7.0' );

			wp_enqueue_script( 'jquery.waypoints.min.js',
			                   get_theme_file_uri( "assets/vendor/jquery.waypoints.min.js" ),
			                   [ 'jquery' ],
			                   '4.0.0',
			                   true );

			wp_enqueue_script( 'bootstrap',
			                   get_theme_file_uri( "assets/vendor/bootstrap/bootstrap.bundle.min.js" ),
			                   [ 'jquery' ],
			                   '4.5.3',
			                   true );

			/** WP Radio Styles */
			if ( $is_wpradio ) {
				wp_enqueue_style( 'wpmilitary-wpradio', get_theme_file_uri( "assets/css/wp-radio.css" ) );
				wp_enqueue_script( 'wpmilitary-wpradio',
				                   get_theme_file_uri( "assets/js/wp-radio.min.js" ),
				                   [ 'jquery', 'wp-util' ],
				                   time(),
				                   true );

				return;
			}

			/** WP-Military Styles */
			wp_enqueue_style( 'wpmilitary-style', get_theme_file_uri( "assets/css/style.css" ) );
			wp_enqueue_script( 'wpmilitary-script',
			                   get_theme_file_uri( "assets/js/script.min.js" ),
			                   [ 'jquery', 'wp-util' ],
			                   time(),
			                   true );
		}

		/**
		 * @return WP_Military_Enqueue|null
		 */
		public static function instance(){
			if(is_null(self::$instance)){
				self::$instance = new self();
			}

			return self::$instance;
		}
	}

}

WP_Military_Enqueue::instance();
