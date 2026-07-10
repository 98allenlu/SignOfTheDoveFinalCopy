<?php
/**
 * Rainbow & Dove — Theme Functions
 *
 * @package rainbow-dove
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ── Theme Setup ────────────────────────────────────────────────────────────────

add_action( 'after_setup_theme', function () {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    load_theme_textdomain( 'rainbow-dove', get_template_directory() . '/languages' );
} );

// ── Enqueue Styles, Fonts & Scripts ───────────────────────────────────────────

add_action( 'wp_enqueue_scripts', function () {

    // Google Fonts: Libre Franklin
    wp_enqueue_style(
        'rainbow-dove-google-fonts',
        'https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;500;700&display=swap',
        [], null
    );

    // Main theme stylesheet
    wp_enqueue_style(
        'rainbow-dove-style',
        get_template_directory_uri() . '/assets/css/theme.css',
        [ 'rainbow-dove-google-fonts' ],
        wp_get_theme()->get( 'Version' )
    );

    // Self-hosted premium fonts: P22 Franklin Caslon, Broadsheet, Schooner Script
    wp_enqueue_style(
        'rainbow-dove-premium-fonts',
        get_template_directory_uri() . '/assets/fonts/premium-fonts.css',
        [], wp_get_theme()->get( 'Version' )
    );

    // Inject PHP-resolved image URL CSS variables so all assets work correctly
    $uri = get_template_directory_uri();
    $inline_css = "
        :root {
            --rd-header-bg:       url('{$uri}/assets/images/header-bg.png');
            --rd-footer-edge:     url('{$uri}/assets/images/footer-edge.png');
            --rd-section-texture: url('{$uri}/assets/images/section-texture.png');
            --rd-cover-shape:     url('{$uri}/assets/svg/cover-block-shape.svg');
            --rd-torn-edge:       url('{$uri}/assets/svg/torn-paper-edge.svg');
        }
    ";
    wp_add_inline_style( 'rainbow-dove-style', $inline_css );

    // Navigation JS (dropdowns, mobile menu toggle)
    wp_enqueue_script(
        'rainbow-dove-nav',
        get_template_directory_uri() . '/assets/js/navigation.js',
        [], wp_get_theme()->get( 'Version' ), true
    );
} );

add_action( 'enqueue_block_editor_assets', function () {
    // Load fonts + styles inside the block editor so they render correctly
    wp_enqueue_style(
        'rainbow-dove-editor-fonts',
        get_template_directory_uri() . '/assets/fonts/premium-fonts.css',
        [], wp_get_theme()->get( 'Version' )
    );
    wp_enqueue_style(
        'rainbow-dove-editor-style',
        get_template_directory_uri() . '/assets/css/theme.css',
        [ 'rainbow-dove-editor-fonts' ],
        wp_get_theme()->get( 'Version' )
    );
} );

// ── Block Pattern Categories ───────────────────────────────────────────────────

add_action( 'init', function () {
    $categories = [
        [ 'slug' => 'rainbow-dove-header',  'label' => __( 'Headers',        'rainbow-dove' ) ],
        [ 'slug' => 'rainbow-dove-footer',  'label' => __( 'Footers',        'rainbow-dove' ) ],
        [ 'slug' => 'rainbow-dove-banner',  'label' => __( 'Banners',        'rainbow-dove' ) ],
        [ 'slug' => 'rainbow-dove-blog',    'label' => __( 'Blog',           'rainbow-dove' ) ],
        [ 'slug' => 'rainbow-dove-query',   'label' => __( 'Query',          'rainbow-dove' ) ],
        [ 'slug' => 'rainbow-dove-shop',    'label' => __( 'Shop',           'rainbow-dove' ) ],
        [ 'slug' => 'rainbow-dove-cta',     'label' => __( 'Call to Action', 'rainbow-dove' ) ],
        [ 'slug' => 'rainbow-dove-text',    'label' => __( 'Text',           'rainbow-dove' ) ],
    ];
    foreach ( $categories as $cat ) {
        register_block_pattern_category( $cat['slug'], [ 'label' => $cat['label'] ] );
    }
} );

// ── Inline SVG helper (safe, strips scripts) ──────────────────────────────────

function rd_inline_svg( string $filename ): string {
    $path = get_template_directory() . '/assets/svg/' . $filename;
    if ( ! file_exists( $path ) ) return '';
    $svg = file_get_contents( $path );
    // Strip XML declaration and script tags for safety
    $svg = preg_replace( '/<\?xml[^>]*\?>/i', '', $svg );
    $svg = preg_replace( '/<script\b[^>]*>.*?<\/script>/is', '', $svg );
    return $svg;
}

// ── Homepage Setup (runs once on theme activation) ────────────────────────────
//
// Creates a "Home" page if it doesn't exist, then sets WordPress to use a
// static front page so the front-page.html FSE template is loaded.

add_action( 'after_switch_theme', function () {
    // Only run if front page isn't already configured
    if ( 'page' === get_option( 'show_on_front' ) && get_option( 'page_on_front' ) ) {
        return;
    }

    // Find or create the Home page
    $home = get_page_by_path( 'home' );
    if ( ! $home ) {
        $home_id = wp_insert_post( [
            'post_title'   => 'Home',
            'post_name'    => 'home',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ] );
    } else {
        $home_id = $home->ID;
    }

    if ( $home_id && ! is_wp_error( $home_id ) ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_id );
    }
} );

// ── WooCommerce ────────────────────────────────────────────────────────────────

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); // use our styles only
