<?php 


// stylesheets
function load_stylesheets() {
    // wp_register_style('stylesheet', get_template_directory_uri() . '/styles/front-page.css');
    // wp_register_style('stylesheet', get_template_directory_uri() . '/styles/footer.css', array(), false, 'all');
    // wp_register_style('stylesheet', get_template_directory_uri() . '/styles/services.css');
    wp_register_style('stylesheet', get_template_directory_uri() . '/styles/main.css');
    
    wp_enqueue_style('stylesheet');
};

// JS scripts
function load_js_scripts(){
    wp_register_script('scripts', get_template_directory_uri() . '/scripts/main.js', array(), false, true);

    wp_enqueue_script('scripts');
};
 

// calls the enqueing functions for scripts and stylesheets 
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_js_scripts');

// menu theme support. Makes 'menu' show under 'appearance' tab in WP admin
add_theme_support( 'menus' );


// theme support for ACF to add Options Menu Item
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

//adds theme support to allow post thumbnails to show in wp-admin
add_theme_support( 'post-thumbnails' );


/**
 * Plugin name: WP Trac #42573: Fix for theme template file caching.
 * Description: Flush the theme file cache each time the admin screens are loaded which uses the file list.
 * Plugin URI: https://core.trac.wordpress.org/ticket/42573
 * Author: Weston Ruter, XWP.
 * Author URI: https://weston.ruter.net
 */

function wp_42573_fix_template_caching( WP_Screen $current_screen ) {

	// Only flush the file cache with each request to post list table, edit post screen, or theme editor.
	if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
		return;
	}

	$theme = wp_get_theme();
	if ( ! $theme ) {
		return;
	}

	$cache_hash = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
	$label = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
	$transient_key = substr( $label, 0, 29 ) . md5( $label );
	delete_transient( $transient_key );
}
add_action( 'current_screen', 'wp_42573_fix_template_caching' );





//////this adds widget option in sidebar and creates new side bar. This one i renamed to 'blog post sidebar'

if (function_exists('register_sidebar')) {

	register_sidebar(array(
			'name' => 'Blog Post Siderbar',
			'id'   => 'blog_post_sidebar',
			'description'   => 'Sidebar for Archived posts',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
	));

}



////this function adds pagination output and specifically deteles entire button.

function pagination_nav() {
    global $wp_query;
 
    if ( $wp_query->max_num_pages > 1) { ?>


<nav class="pagination" role="navigation">
        <?php if( get_previous_posts_link() ) { 
		?>
		
        <div id="prv" class="button pag-btn nav-next"><?php previous_posts_link( 'Previous' ); ?></div>
        <?php } 
        if( get_next_posts_link() ) { ?>
        <div id="nxt" class="button pag-btn nav-previous"><?php next_posts_link( 'Next' ); ?></div>
        <?php } ?>
    </nav>
<?php }
}



