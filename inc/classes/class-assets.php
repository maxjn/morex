<?php

/**
 * Enqueue theme assets
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc;

use MOREX_THEME\Inc\Traits\Singleton;

class Assets
{
	use Singleton;

	protected function __construct()
	{

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{

		/**
		 * Actions.
		 */
		add_action('wp_enqueue_scripts', [$this, 'register_styles']);
		add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
		/**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		// add_action('enqueue_block_assets', [$this, 'enqueue_editor_assets']);
	}

	public function register_styles()
	{
		// Register styles.
		wp_register_style('mobilemenu-css', MOREX_CSS_URI . '/mobilemenu.css', [], filemtime(MOREX_CSS_DIR_PATH . '/mobilemenu.css'), 'all');
		wp_register_style('swiper-css', MOREX_CSS_URI . '/swiper-bundle.min.css', ['mobilemenu-css'], filemtime(MOREX_CSS_DIR_PATH . '/swiper-bundle.min.css'), 'all');
		wp_register_style('styles-css', MOREX_CSS_URI . '/styles.css', ['swiper-css'], filemtime(MOREX_CSS_DIR_PATH . '/styles.css'), 'all');
		wp_register_style('stylertl-css', MOREX_CSS_URI . '/style.rtl.css', ['styles-css'], filemtime(MOREX_CSS_DIR_PATH . '/style.rtl.css'), 'all');

		// Enqueue Styles.
		wp_enqueue_style('mobilemenu-css');
		wp_enqueue_style('swiper-css');
		wp_enqueue_style('styles-css');
		wp_enqueue_style('stylertl-css');
	}

	public function register_scripts()
	{
		// Register scripts.
		wp_register_script('swiper-js', MOREX_JS_URI . '/swiper-bundle.min.js', [], filemtime(MOREX_JS_DIR_PATH . '/swiper-bundle.min.js'), true);
		wp_register_script('imagesloaded-js', MOREX_JS_URI . '/imagesloaded.pkgd.min.js', ['swiper-js'], filemtime(MOREX_JS_DIR_PATH . '/imagesloaded.pkgd.min.js'), true);
		wp_register_script('isotope-js', MOREX_JS_URI . '/isotope.pkgd.min.js', ['imagesloaded-js'], filemtime(MOREX_JS_DIR_PATH . '/isotope.pkgd.min.js'), true);
		wp_register_script('script-js', MOREX_JS_URI . '/script.js', ['isotope-js'], filemtime(MOREX_JS_DIR_PATH . '/script.js'), true);


		// Enqueue Scripts.
		wp_enqueue_script('swiper-js');
		wp_enqueue_script('imagesloaded-js');
		wp_enqueue_script('isotope-js');
		wp_enqueue_script('script-js');
	}
}
