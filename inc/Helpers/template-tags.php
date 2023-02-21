<?php
// Prevent Direct Access
if (!defined('ABSPATH')) {
	exit;
}

/**
 * Custom template tags for the theme.
 *
 * @package Morex
 */

/**
 * Gets the thumbnail with Lazy Load.
 * Should be called in the WordPress Loop.
 *
 * @param int|null $post_id               Post ID.
 * @param string   $size                  The registered image size.
 * @param array    $additional_attributes Additional attributes.
 *
 * @return string
 */
function get_the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = [])
{
	$custom_thumbnail = '';

	if (null === $post_id) {
		$post_id = get_the_ID();
	}

	if (has_post_thumbnail($post_id)) {
		$default_attributes = [
			'loading' => 'lazy'
		];

		$attributes = array_merge($additional_attributes, $default_attributes);

		$custom_thumbnail = wp_get_attachment_image(
			get_post_thumbnail_id($post_id),
			$size,
			false,
			$attributes
		);
	}

	return $custom_thumbnail;
}

/**
 * Renders Custom Thumbnail with Lazy Load.
 *
 * @param int    $post_id               Post ID.
 * @param string $size                  The registered image size.
 * @param array  $additional_attributes Additional attributes.
 */
function the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = [])
{
	echo get_the_post_custom_thumbnail($post_id, $size, $additional_attributes);
}

/**
 * Get the url of the page that uses the spisific template.
 *
 * If 'null' was returned it means that the template has not been used.
 *
 * @param string $TEMPLATE_NAME template name / relative path
 *
 * @return null|string
 */
function morex_get_template_page_url($TEMPLATE_NAME)
{
	$url = null;
	$pages = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => $TEMPLATE_NAME
	));
	if (isset($pages[0])) {
		$url = get_page_link($pages[0]->ID);
	}
	return $url;
}

/**
 * Get the trimmed version of post excerpt.
 *
 * This is for modifing manually entered excerpts,
 * NOT automatic ones WordPress will grab from the content.
 *
 * It will display the first given characters ( e.g. 100 ) characters of a manually entered excerpt,
 * but instead of ending on the nth( e.g. 100th ) character,
 * it will truncate after the closest word.
 *
 * @param int $trim_character_count Charter count to be trimmed
 *
 * @return bool|string
 */
function morex_the_excerpt($trim_character_count = 0)
{
	$post_ID = get_the_ID();

	if (empty($post_ID)) {
		return null;
	}

	if (has_excerpt() || 0 === $trim_character_count) {
		the_excerpt();

		return;
	}

	$excerpt = wp_html_excerpt(get_the_excerpt($post_ID), $trim_character_count, '...');


	echo $excerpt;
}

function morex_the_post_pagination($query)
{ // 'paged' & 'page use' https://wordpress.stackexchange.com/questions/180784/what-is-the-difference-between-paged-and-page
	$page_arg = (is_front_page() && is_page_template('templates/home.php')) ? 'page' : 'paged';
	$big = 999999999; // need an unlikely integer
	$links = paginate_links(array(
		'base'      => str_replace($big, '%#%', get_pagenum_link($big)),
		'format'    => '?paged=%#%',
		'current'   => max(1, get_query_var($page_arg, $query)),
		'prev_text' => __('Previous', 'morex'),
		'next_text' => __('Next', 'morex'),
		'type'      => 'array',
		'total' => $query->max_num_pages
	));

	if (get_theme_mod('show_pagination', true) === true) {

?>
<!-- Pagination Start -->
<div class="grid grid-cols-1 mt-7">
    <div class="flex justify-center pagination">
        <nav aria-label="Page navigation">
            <ul class="flex list-style-none ">
                <?php
						if (isset($links) && is_array($links)) {
							foreach ($links as $link) {
								echo '<li class="page-item">';
								echo $link;
								echo '</li>';
							}
						}
						?>
            </ul>
        </nav>
    </div>
</div>


<!-- Pagination End -->
<?php

	}
}
