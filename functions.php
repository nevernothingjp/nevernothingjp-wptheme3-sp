<?php
if (!function_exists('thema_setup')):
  function thema_setup() {
    add_theme_support('post-thumbnails');
    register_sidebar(
      array(
        'name' => 'Wiget Header Left',
        'id' => 'nnj-wiget-header-left',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
      )
    );
    register_sidebar(
        array(
          'name' => 'Wiget Header Center',
          'id' => 'nnj-wiget-header-center',
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => '',
        )
      );
      register_sidebar(
        array(
          'name' => 'Wiget Header Right',
          'id' => 'nnj-wiget-header-right',
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => '',
        )
      );
      register_sidebar(
        array(
          'name' => 'Wiget Header Bottom',
          'id' => 'nnj-wiget-header-bottom',
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => '',
        )
      );
      register_sidebar(
        array(
          'name' => 'Wiget Navigater',
          'id' => 'nnj-wiget-navigater',
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => '',
        )
      );
      register_sidebar(
        array(
          'name' => 'Wiget Footer',
          'id' => 'nnj-wiget-footer',
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => '',
        )
      );
      register_sidebar(
        array(
          'name' => 'Wiget Sidebar Left',
          'id' => 'nnj-wiget-sidebar-left',
          'before_widget' => '<div class="nnj-wight-sidebar nnj-wight-sidebar-left">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        )
      );
      register_sidebar(
        array(
          'name' => 'Wiget Sidebar Right',
          'id' => 'nnj-wiget-sidebar-right',
          'before_widget' => '<div class="nnj-wight-sidebar nnj-wight-sidebar-right">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        )
      );

      register_sidebar(
        array(
          'name' => 'Wiget Header Left SP',
          'id' => 'nnj-wiget-header-left-sp',
          'before_widget' => '',
          'after_widget' => '',
          'before_title' => '',
          'after_title' => '',
        )
      );
      register_sidebar(
          array(
            'name' => 'Wiget Header Center SP',
            'id' => 'nnj-wiget-header-center-sp',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
          )
        );
        register_sidebar(
          array(
            'name' => 'Wiget Header Right SP',
            'id' => 'nnj-wiget-header-right-sp',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
          )
        );
        register_sidebar(
          array(
            'name' => 'Wiget Header Bottom SP',
            'id' => 'nnj-wiget-header-bottom-sp',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
          )
        );
        register_sidebar(
          array(
            'name' => 'Wiget Navigater SP',
            'id' => 'nnj-wiget-navigater-sp',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
          )
        );
        register_sidebar(
          array(
            'name' => 'Wiget Footer SP',
            'id' => 'nnj-wiget-footer-sp',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
          )
        );
        register_sidebar(
          array(
            'name' => 'Wiget Sidebar Left SP',
            'id' => 'nnj-wiget-sidebar-left-sp',
            'before_widget' => '<div class="nnj-wight-sidebar nnj-wight-sidebar-left">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
          )
        );
        register_sidebar(
          array(
            'name' => 'Wiget Sidebar Right SP',
            'id' => 'nnj-wiget-sidebar-right-sp',
            'before_widget' => '<div class="nnj-wight-sidebar nnj-wight-sidebar-right">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
          )
        );
    }
endif;

// Add Actions
add_action('after_setup_theme', 'thema_setup');

// Add Editor Style
add_editor_style('editor-style.css');

// HTML HEAD
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head','feed_links', 2);
remove_action('wp_head','feed_links_extra', 3);
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('wp_head','wp_generator');
remove_action('wp_head','wp_shortlink_wp_head');

function remove_recent_comments_style() {
  global $wp_widget_factory;
  remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

add_filter('wp_feed_cache_transient_lifetime', create_function('$a', 'return 600;' ) );

add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
    if ( 'dns-prefetch' === $relation_type ) {
        return array_diff( wp_dependencies_unique_hosts(), $hints );
    }
    return $hints;
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
