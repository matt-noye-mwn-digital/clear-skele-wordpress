<?php 
    require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

    add_action('tgmpa_register', 'cswPluginIncludes_register_required_plugins');

    function cswPluginIncludes_register_required_plugins(){
        $plugins = array(
            array(
                'name'               => 'Advanced Custom Fields Pro',
                'slug'               => 'acf-pro',
                'source'             => get_template_directory() . '/inc/plugins/advanced-custom-fields-pro.zip',
                'required'           => true,
                'version'            => '6.0.7',
                'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
                'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            ),
            array(
                'name' => 'Classic Editor',
                'slug' => 'classic-editor',
                'required' => true,
            ),
            array(
                'name' => 'Contact form 7',
                'slug' => 'contact-form-7',
                'required' => true,
            ),
            array(
                'name' => 'Custom Post Type UI',
                'slug' => 'custom-post-type-ui',
                'required' => true,
            ),
        );
        tgmpa( $plugins );
    };