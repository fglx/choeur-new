<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'basic-style';
    $child_style = 'basic-child-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style($child_style, get_stylesheet_directory_uri() . '/style.css',  [$parent_style]);
}

add_action('wp_enqueue_scripts', 'remove_social_crap');
function remove_social_crap() {
    remove_action('the_content', 'basic_social_share_buttons');
}

add_action('custom_header_top_wrap_end', 'clickable_banner');
function clickable_banner() {
    $header_image = get_header_image_tag();

    if ( $header_image  ){ ?>
        <div class="header-image">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $header_image; ?>
            </a>
        </div>
    <?php }
}
