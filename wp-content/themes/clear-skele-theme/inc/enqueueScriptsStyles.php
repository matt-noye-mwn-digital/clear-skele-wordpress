<?php  
    if(!function_exists('cswEnqueueStylesScripts')) {
        function cswEnqueueStylesScripts(){
            //Styles
            wp_enqueue_style('bootstrapStyles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
            wp_enqueue_style('fontAwesome6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
            wp_enqueue_style('owlCarouselCoreStyles', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
            wp_enqueue_style('owlCarouselThemeStyle', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
            wp_enqueue_style('animateCss', get_template_directory_uri().'/assets/css/animate.css');

            wp_enqueue_style('mainCustomStyles', get_template_directory_uri().'/assets/css/main.min.css');


            //Scripts
            wp_enqueue_script('jqueryScript', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), '3.6.4', true);
            wp_enqueue_script('jqueryUiScript', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js', array(), '1.13.2', true);
            wp_enqueue_script('bootstrapScript', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
            wp_enqueue_script('owlCarouselScript', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '2.0', true);
            wp_enqueue_script('wowJsScript', get_template_directory_uri().'/assets/js/wow.min.js', array(), '2.0', true);


            wp_enqueue_script('mainCustomScript', get_template_directory_uri().'/assets/js/main.js', array(), '2024', true);

        }
    }
    add_action('wp_enqueue_scripts', 'cswEnqueueStylesScripts');