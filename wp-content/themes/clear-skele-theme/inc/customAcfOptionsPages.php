<?php 
    if(function_exists('cswacf_add_options_page')){
        acf_add_options_page(array(
            'menu_title' => 'Theme Options',
            'menu_slug' => 'theme-options',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-settings',
            'position' => '60',
            'redirect' => true,
        ));
    }