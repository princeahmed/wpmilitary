<?php


if ( ! class_exists( 'WP_Military_Hooks' ) ) {
	class WP_Military_Hooks {
		/** @var null */
		private static $instance = null;

		/**
		 * WP_Military_Hooks constructor.
		 */
		public function __construct() {
			add_action( 'after_setup_theme', [ $this, 'theme_features' ] );
		}

		public function theme_features() {
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'custom-logo' );

			add_theme_support( 'html5',
			                   [
				                   'search-form',
				                   'comment-form',
				                   'comment-list',
				                   'gallery',
				                   'caption',
			                   ] );

//			add_theme_support( 'custom-header', [
//				'width'         => 980,
//				'height'        => 60,
//				'default-image' => get_template_directory_uri() . '/images/header.jpg',
//			] );


		}

		/**
		 * @return WP_Military_Hooks|null
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}

}

WP_Military_Hooks::instance();
