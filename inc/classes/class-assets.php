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
		wp_register_style('mobilemenu', MOREX_CSS_URI . '/mobilemenu.css', [], filemtime(MOREX_CSS_DIR_PATH . '/mobilemenu.css'), 'all');
		wp_register_style('swiper', MOREX_CSS_URI . '/swiper-bundle.min.css', ['mobilemenu'], filemtime(MOREX_CSS_DIR_PATH . '/swiper-bundle.min.css'), 'all');
		wp_register_style('styles', MOREX_CSS_URI . '/styles.css', ['swiper'], filemtime(MOREX_CSS_DIR_PATH . '/styles.css'), 'all');
		wp_register_style('fonts', MOREX_CSS_URI . '/fonts/primary-' . get_theme_mod('primary_font', 'vazir') . '.css', ['styles'], filemtime(MOREX_CSS_DIR_PATH . '/styles.css'), 'all');
		wp_register_style('stylertl', MOREX_CSS_URI . '/style.rtl.css', ['fonts'], filemtime(MOREX_CSS_DIR_PATH . '/style.rtl.css'), 'all');

		// Enqueue Styles.
		wp_enqueue_style('mobilemenu');
		wp_enqueue_style('swiper');
		wp_enqueue_style('styles');
		wp_enqueue_style('fonts');
		wp_enqueue_style('stylertl');
	}

	public function register_scripts()
	{
		// Register scripts.
		wp_register_script('fontawesome', 'https://kit.fontawesome.com/7ee55f229b.js', [], false, true);
		wp_register_script('swiper', MOREX_JS_URI . '/swiper-bundle.min.js', ['fontawesome'], filemtime(MOREX_JS_DIR_PATH . '/swiper-bundle.min.js'), true);
		wp_register_script('imagesloaded', MOREX_JS_URI . '/imagesloaded.pkgd.min.js', ['swiper'], filemtime(MOREX_JS_DIR_PATH . '/imagesloaded.pkgd.min.js'), true);
		wp_register_script('isotope', MOREX_JS_URI . '/isotope.pkgd.min.js', ['imagesloaded'], filemtime(MOREX_JS_DIR_PATH . '/isotope.pkgd.min.js'), true);
		wp_register_script('script', MOREX_JS_URI . '/script.js', ['isotope'], filemtime(MOREX_JS_DIR_PATH . '/script.js'), true);


		// Enqueue Scripts.
		wp_enqueue_script('swiper');
		wp_enqueue_script('imagesloaded');
		wp_enqueue_script('isotope');
		wp_enqueue_script('script');
	}
}
