<?php

namespace Tonik\Theme\App\Setup;

/*
|-----------------------------------------------------------
| Theme Actions
|-----------------------------------------------------------
|
| This file purpose is to include your custom
| actions hooks, which process a various
| logic at specific parts of WordPress.
|
*/

/**
 * Example action handler.
 *
 * @return integer
 */
function example_action()
{
    //
}
add_filter('excerpt_length', 'Tonik\Theme\App\Setup\example_action');

/**
 * Adds support for ACF Pro options page.
 *
 * @return void
 */
function add_acfpro_options_page()
{
    if ( function_exists('acf_add_options_page') ) {

        /*$args = array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        );

        acf_add_options_page($args);

        acf_add_options_page('Theme Settings');*/

    }
}
add_action('acf/init', 'Tonik\Theme\App\Setup\add_acfpro_options_page');