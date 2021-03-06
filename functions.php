<?php
require_once('inc/customizer.php');
require_once('inc/csf-customizer.php');

if (site_url() == 'http://localhost/customizer') {

    define('VERSION', time());
} else {
    define('VERSION', wp_get_theme()->get('VERSION'));
}


if (
    !function_exists('customizer_setup')
) :
    function customizer_setup()
    {
        load_theme_textdomain('customizer', get_theme_file_path('/languages'));

        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        add_theme_support('title-tag');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'customizer_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ));



        register_nav_menus(array(
            'main-menu' => esc_html__('Primary', 'customizer'),
            'footer-menu' => esc_html__('Footer Menu', 'customizer'),
        ));
    }

endif;
add_action('after_setup_theme', 'customizer_setup');


function customizer_assets()
{
    //stylesheets
    wp_enqueue_style('fontawesome-css', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    wp_enqueue_style('fotns-css', '//fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap', false);
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('assets/css/bootstrap.min.css'),null,time());
    wp_enqueue_style('main-style', get_stylesheet_uri(), null, time());

    //inline style added to change customizer service icon color
    $services_icon_color = get_theme_mod('cust_service_icon_color_setting', '#dd2d6a');
    $services_style = <<<EOD
.service i {
    color: {$services_icon_color};
}
EOD;

    wp_add_inline_style('main-style', $services_style);

    //scripts
    wp_enqueue_script('jquery-js', get_theme_file_uri('assets/js/jquery3.6.min.js', array('jquery'), 'VERSION', true));

    wp_enqueue_script('booststrap-js', get_theme_file_uri('assets/js/bootstrap.min.js', array('jquery'),'VERSION', true));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
   
}
add_action('wp_enqueue_scripts', 'customizer_assets');

//hook to add customizer js for customize option
function cust_customizer_assets() {
	wp_enqueue_script( "cust-customizer-js", get_theme_file_uri( "/assets/js/customizer.js" ), array(
		'jquery',
		'customize-preview'
	), time(), true );
}

add_action( "customize_preview_init", 'cust_customizer_assets' );
