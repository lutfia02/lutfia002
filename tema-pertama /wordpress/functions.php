
<?php


/*
|--------------------------------------------------------------------------
| LOAD STYLESHEET
|--------------------------------------------------------------------------
*/

function siti_lutfia_styles() {

    wp_enqueue_style(
        'siti-lutfia-style',
        get_stylesheet_uri(),
        array(),
        '4.0'
    );

}

add_action(
    'wp_enqueue_scripts',
    'siti_lutfia_styles'
);


/*
|--------------------------------------------------------------------------
| THEME SETUP
|--------------------------------------------------------------------------
*/

function siti_lutfia_theme_setup() {

    add_theme_support(
        'title-tag'
    );

    add_theme_support(
        'post-thumbnails'
    );

    add_theme_support(
        'custom-logo'
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );

}

add_action(
    'after_setup_theme',
    'siti_lutfia_theme_setup'
);