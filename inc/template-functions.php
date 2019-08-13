<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package _s-materializecss-materializecss-materializecss
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function _s_materializecss_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', '_s_materializecss_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function _s_materializecss_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', '_s_materializecss_pingback_header' );

/**
 * Custom pagination
 */
function _s_materializecss_page_navi() {
	global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pagination_items =  paginate_links( array(
        'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'             => '?paged=%#%',
        'current'            => max( 1, get_query_var('paged') ),
        'total'              => $wp_query->max_num_pages,
        'mid_size'           => 3,
        'type'               => 'array',
        'prev_text'          => __('<i class="material-icons">chevron_left</i>'),
        'next_text'          => __('<i class="material-icons">chevron_right</i>'),
        'before_page_number' => '',
        'after_page_number'  => ''
    ) );
    echo '<ul class="pagination center-align">';
    if($pagination_items != null) {
        foreach ($pagination_items as $item) {
            if (strpos($item, '<span') === false) {
                echo '<li class="waves-effect">' . $item . '</li>';
            }
            elseif($item == "&#8230;") {
                echo '<li class="waves-effect">whoops</li>';
            }
            else {
                $item = str_replace('<span', '<a href="#"', $item);
                $item = str_replace('</span>', '</a>', $item);
                echo '<li class="active">' . $item . '</li>';
            }
        }
    }
    echo '</ul>';
}

