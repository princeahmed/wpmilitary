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

			wp_enqueue_style('wp-military-style', get_theme_file_uri("assets/css/style.css"));
			wp_enqueue_script( 'wp-military-script',
			                   get_theme_file_uri( "assets/js/script.min.js" ),
			                   [ 'jquery', 'wp-util' ],
			                   WP_MILITARY_VERSION,
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
