<?php

function mytheme_post_thumbnails() {

    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');
}


add_action('after_setup_theme', 'mytheme_post_thumbnails');

function btcm_project_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'right-sidebar', 'btcm_project' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget-box %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

    add_action( 'widgets_init', 'btcm_project_widgets_init' );
?>