<?php

/**
 * Custom Gutenberg functions
 */

function zero_theme_default_colors() {
    add_theme_support(
        'editor-color-palette', 
        array(
            array(
                'name' => 'White',
                'slug' => 'white',
                'color' => '#fff'
            ),
            array(
                'name' => 'Black',
                'slug' => 'black',
                'color' => '#000'
            ),
            array(
                'name' => 'Primary',
                'slug' => 'primary',
                'color' => '#FF0000'
            ),
            array(
                'name' => 'Secondary',
                'slug' => 'secondary',
                'color' => '#00FF00'
            ),
            array(
                'name' => 'Tertiary',
                'slug' => 'tertiary',
                'color' => '#0000FF'
            )
        )
    );

    add_theme_support(
        'editor-font-sizes', 
        array(
            array(
                'name' => 'Jumbo',
                'slug' => 'jumbo',
                'size' => 46,
            ),
            array(
                'name' => 'Extra Large',
                'slug' => 'xlarge',
                'size' => 36,
            ),
            array(
                'name' => 'Large',
                'slug' => 'large',
                'size' => 28,
            ),
            array(
                'name' => 'Normal',
                'slug' => 'normal',
                'size' => 16,
            ),
            array(
                'name' => 'Small',
                'slug' => 'small',
                'size' => 12,
            ),
            array(
                'name' => 'Extra Small',
                'slug' => 'xsmall',
                'size' => 8,
            ),
        )
    );
}

add_action( 'init', 'zero_theme_default_colors' );

function zero_custom_blocks() {
    wp_register_script( 'custom-cta-js', get_templat_directory_uri() . '/js/gutenberg-cta-block.js', array() )
    register_block_type('zero/custom-cta', array(
        'editor_script' => 'custom-cta-js'
    ));
}