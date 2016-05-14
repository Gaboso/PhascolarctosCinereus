<?php
/**
 * Created by Gaboso
 * User: gaboso
 * Date: 14/05/2016
 */

add_theme_support( 'post-thumbnails' );

function add_wp3menu_support() {

    register_nav_menus(
        array(
            'main-menu' => __('Main Navigation')
        )
    );

}

add_action('init', 'add_wp3menu_support');

?>