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
			$is_wpradio = in_array(get_page_template_slug(), [
				'templates/wp-radio.php',
				'templates/wp-radio-ads-player.php',
				'templates/radio-player.php',
				'templates/integrate-google-drive.php',
			]);

			$is_integrate_google_drive = in_array(get_page_template_slug(), [
				'templates/integrate-google-drive.php',
			]);

			wp_enqueue_style( 'bootstrap',
			                  get_theme_file_uri( "assets/vendor/bootstrap/bootstrap.min.css" ),
			                  false,
			                  '4.5.3' );

			wp_enqueue_style( 'font-awesome',
			                  get_theme_file_uri( "assets/vendor/font-awesome/css/font-awesome.min.css" ),
			                  false,
			                  '4.7.0' );

			wp_enqueue_style( 'owl.carousel',
			                  get_theme_file_uri( "assets/vendor/owl-carousel/owl.carousel.min.css" ),
			                  false,
			                  '2.2.1' );

			wp_enqueue_style( 'owl.theme.default',
			                  get_theme_file_uri( "assets/vendor/owl-carousel/owl.theme.default.min.css" ),
			                  false,
			                  '2.2.1' );


			/** js */
			wp_enqueue_script( 'jquery.waypoints.min.js',
			                   get_theme_file_uri( "assets/vendor/jquery.waypoints.min.js" ),
			                   [ 'jquery' ],
			                   '4.0.0',
			                   true );


			wp_enqueue_script( 'owl.carousel',
			                   get_theme_file_uri( "assets/vendor/owl-carousel/owl.carousel.js" ),
			                   [ 'jquery' ],
			                   '2.2.1',
			                   true );



			wp_enqueue_script( 'bootstrap',
			                   get_theme_file_uri( "assets/vendor/bootstrap/bootstrap.bundle.min.js" ),
			                   [ 'jquery' ],
			                   '4.5.3',
			                   true );

			/** Integrate Google Drive Styles */
			if ( $is_integrate_google_drive ) {
				wp_enqueue_style( 'wpmilitary-integrate-google-drive', get_theme_file_uri( "assets/css/integrate-google-drive.css" ) );
//				wp_enqueue_script( 'wpmilitary-integrate-google-drive', get_theme_file_uri( "assets/js/integrate-google-drive.min.js" ), [ 'jquery', 'wp-util' ], time(), true );

				return;
			}


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
