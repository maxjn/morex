<?php

/**
 * Bootstraps the Theme.
 *
 * @package Morex
 */

namespace MOREX_THEME\Inc;

use MOREX_THEME\Inc\Custom_Css as IncCustom_Css;
use MOREX_THEME\Inc\Customizers\Custom_Css;
use MOREX_THEME\Inc\Traits\Singleton;

// Prevent Direct Access
if (!defined('ABSPATH')) {
	exit;
}

class MOREX_THEME
{
	use Singleton;

	protected function __construct()
	{
		/**
		 * Load Textdomain
		 */
		load_theme_textdomain('morex', MOREX_DIR_PATH . '/languages');



		// Load class.
		Install_Plugins::get_instance();
		Custom_styles::get_instance();
		Assets::get_instance();
		Menus::get_instance();
		if (class_exists('Acf')) {
			ACF_Settings::get_instance();
			Option_Page::get_instance();
		}
		Comment_Form::get_instance();
		if (class_exists('Kirki')) {
			Customizers\Morex_Init_Customizers::get_instance();
		}

		if (class_exists('Elementor')) {
			Elementor_Locations::get_instance();
		}
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{

		/**
		 * Actions.
		 */

		add_action('after_setup_theme', [$this, 'setup_theme']);
		add_filter('upload_mimes', [$this, 'morex_mime_types']);
	}

	/**
	 * Setup theme.
	 *
	 * @return void
	 */
	public function setup_theme()
	{

		/**
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * Adding this will allow you to select the featured image on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		add_theme_support('post-formats', array('gallery'));


		/**
		 * Register image sizes.
		 */
		add_image_size('post-card', 370, 254, true);
		add_image_size('portfolio-card', 370, 311, true);
		add_image_size('portfolio-single', 694, 347.96, true);



		// Add theme support for selective refresh for widgets.
		/**
		 * WordPress 4.5 includes a new Customizer framework called selective refresh
		 *
		 * Selective refresh is a hybrid preview mechanism that has the performance benefit of not having to refresh the entire preview window.
		 *
		 * @link https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
		 */
		// add_theme_support('customize-selective-refresh-widgets');

		// Add default posts and comments RSS feed links to head.
		// add_theme_support('automatic-feed-links');

		/**
		 * Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style
		 * to output valid HTML5.
		 */
		// add_theme_support(
		// 	'html5',
		// 	[
		// 		'search-form',
		// 		'comment-form',
		// 		'comment-list',
		// 		'gallery',
		// 		'caption',
		// 		'script',
		// 		'style',
		// 	]
		// );

		// Gutenberg theme support.

		/**
		 * Some blocks in Gutenberg like tables, quotes, separator benefit from structural styles (margin, padding, border etc…)
		 * They are applied visually only in the editor (back-end) but not on the front-end to avoid the risk of conflicts with the styles wanted in the theme.
		 * If you want to display them on front to have a base to work with, in this case, you can add support for wp-block-styles, as done below.
		 * @see Theme Styles.
		 * @link https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/, https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
		 */
		// add_theme_support('wp-block-styles');

		/**
		 * Some blocks such as the image block have the possibility to define
		 * a “wide” or “full” alignment by adding the corresponding classname
		 * to the block’s wrapper ( alignwide or alignfull ). A theme can opt-in for this feature by calling
		 * add_theme_support( 'align-wide' ), like we have done below.
		 *
		 * @see Wide Alignment
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
		 */
		// add_theme_support('align-wide');

		/**
		 * Loads the editor styles in the Gutenberg editor.
		 *
		 * Editor Styles allow you to provide the CSS used by WordPress’ Visual Editor so that it can match the frontend styling.
		 * If we don't add this, the editor styles will only load in the classic editor ( tiny mice )
		 *
		 * @see https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
		 */
		// add_theme_support('editor-styles');
		/**
		 *
		 * Path to our custom editor style.
		 * It allows you to link a custom stylesheet file to the TinyMCE editor within the post edit screen.
		 *
		 * Since we are not passing any parameter to the function,
		 * it will by default, link the editor-style.css file located directly under the current theme directory.
		 * In our case since we are passing 'assets/build/css/editor.css' path it will use that.
		 * You can change the name of the file or path and replace the path here.
		 *
		 * @see add_editor_style(
		 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
		 */
		//add_editor_style('assets/build/css/editor.css');

		// Remove the core block patterns
		// remove_theme_support('core-block-patterns');

		/**
		 * Set the maximum allowed width for any content in the theme,
		 * like oEmbeds and images added to posts
		 *
		 * @see Content Width
		 * @link https://codex.wordpress.org/Content_Width
		 */
		// global $content_width;
		// if (!isset($content_width)) {
		// 	$content_width = 1240;
		// }
	}
	/**
	 * Theme Mime Types
	 * @see Add a capability to a user role
	 * @link https://wordpress.stackexchange.com/questions/13413/how-to-add-a-capability-to-a-user-role
	 *
	 * @return array
	 */
	function morex_mime_types($mimes)
	{
		// get the the role object
		$admin_role = get_role('administrator');
		// grant the unfiltered_html capability
		$admin_role->add_cap('unfiltered_html', true);

		$mimes['css']   = 'text/css';
		$mimes['js']  = 'text/javascript';
		return $mimes;
	}
}
