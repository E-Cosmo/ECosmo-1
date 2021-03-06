<?php

if ( !defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}
return array(
    /**
     * Array for demos
     */
    'demos'              => array(
        'olympus-main' => array(
            array(
                'name' => 'MailChimp for WordPress',
                'slug' => 'mailchimp-for-wp',
            ),
            array(
                'name'     => esc_attr__( 'The Events Calendar', 'olympus' ),
                'slug'     => 'the-events-calendar',
                'required' => false,
            ),
            array(
                'name'     => esc_attr__( 'WooCommerce', 'olympus' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
        ),
    ),
    'plugins'            => array(
        array(
            'name'     => esc_attr__( 'WPBakery Page Builder', 'olympus' ),
            'slug'     => 'js_composer',
            'source'   => 'http://up.crumina.net/plugins/js_composer.zip',
            'required' => true,
            'version'  => '6.0.3'
        ),
        array(
            'name' => esc_attr__( 'BBPress', 'olympus' ),
            'slug' => 'bbpress',
        ),
        array(
            'name'     => esc_attr__( 'BuddyPress', 'olympus' ),
            'slug'     => 'buddypress',
            'required' => true,
        ),
        array(
            'name' => esc_attr__( 'rtMedia', 'olympus' ),
            'slug' => 'buddypress-media',
        ),
        array(
            'name'   => esc_attr__( 'Envato Market', 'olympus' ),
            'slug'   => 'envato-market',
            'source' => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
        ),
        array(
            'name'     => esc_attr__( 'Youzer', 'olympus' ),
            'slug'     => 'youzer',
            'source'   => 'http://up.crumina.net/plugins/youzer.zip',
            'required' => true,
            'version'  => '2.3.1'
        ),
    ),
    'theme_id'           => 'olympus',
    'child_theme_source' => 'http://up.crumina.net/demo-data/olympus/olympus-child.zip',
    'has_demo_content'   => true,
);
