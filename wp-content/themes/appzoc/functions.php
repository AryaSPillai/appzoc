
<?php 


function themeslug_enqueue_script() {
    
    // Styles
    wp_enqueue_style( 'Style', get_template_directory_uri() .'/assets/css/style.css',true);
    wp_enqueue_style( 'Icon', get_template_directory_uri() .'/assets/font-icon/css/all.css',true);
    wp_enqueue_style( 'Carousel', get_template_directory_uri() .'/assets/plugins/owl/assets/owl.carousel.min.css',true);
    wp_enqueue_style( 'Swiper', get_template_directory_uri() .'/assets/plugins/swiper-js/swiper-bundle.min.css',true);
    wp_enqueue_style( 'OwlStyle', get_template_directory_uri() .'/assets/plugins/owl/assets/owl.theme.default.min.css',true);
    wp_enqueue_style( 'Aos', get_template_directory_uri() .'/assets/plugins/aos/aos.css',true);
    wp_enqueue_style( 'Fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',true);
    wp_enqueue_style( 'SplittextCss','https://unpkg.com/splitting/dist/splitting.css',true);
    wp_enqueue_style( 'Splittingsell','https://unpkg.com/splitting/dist/splitting-cells.css',true);
    

    // Scripts
    wp_enqueue_script( 'Jquery', get_template_directory_uri() .'/assets/script/jquery-3.5.1.min.js', false );
    wp_enqueue_script( 'Popper', get_template_directory_uri() .'/assets/script/popper.min.js', false );
    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() .'/assets/script/bootstrap/bootstrap.min.js', false );
    wp_enqueue_script( 'Custom', get_template_directory_uri() .'/assets/script/custom-script/custom.js', false );
    wp_enqueue_script( 'babra', 'https://cdn.jsdelivr.net/npm/@barba/core', false );
    wp_enqueue_script( 'Parallax', get_template_directory_uri() .'/assets/script/custom-script/parallax-js.js', false );
    wp_enqueue_script( 'Plugin', get_template_directory_uri() .'/assets/plugins/js-plugins.js', false );
    wp_enqueue_script( 'Splitting', get_template_directory_uri() .'/assets/plugins/split-text/splitting.min.js', false );
    wp_enqueue_script( 'Animation', get_template_directory_uri() .'/assets/script/custom-script/animation-script.js', false );
}




add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

function custom_theme_setup() {
    register_nav_menus( array(
            'navbar' => esc_html__( 'Navbar Menu', '' ),
            'footer'  => esc_html__( 'Footer Menu', '' ),
            'quickbar'  => esc_html__( 'Quick Menu', '' ),
    ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );
?>