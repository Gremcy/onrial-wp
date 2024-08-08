<?php

namespace PS\Functions\Post_Types;

/**
 * Class Letter
 * @package PS\Functions\Post_Types
 */
class Letter {

    /**
     * constructor
     */
    public function __construct() {
        add_action( 'init', array( $this, 'register_post_type' ) );
        add_action( 'admin_menu', array( $this, 'count_new_post' ) );
    }

    /**
     * post type
     */
    public function register_post_type() {
        $labels = array(
            'name'               => __( 'Contact us', \PS::$theme_name ),
            'add_new'            => __( 'Add letter', \PS::$theme_name ),
            'new_item'           => __( 'New letter', \PS::$theme_name )
        );

        $args = array(
            'labels'             => $labels,
            'show_ui'             => true,
            'public'              => false,
            'publicly_queryable'  => false,
            'exclude_from_search' => true,
            'hierarchical'        => false,
            'query_var'           => false,
            'supports'            => array( 'title' ),
            'has_archive'         => false
        );

        register_post_type( 'letter', $args );
    }

    /**
     * quantity
     */
    public function count_new_post() {
        global $menu, $wpdb;
        $count = $wpdb->get_var( "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE post_type = 'letter' and post_status = 'publish'" );
        foreach ($menu as $key => $item) {
            if ($item[2] == 'edit.php?post_type=letter') {
                $menu[$key][0] .= " <span class='awaiting-mod count-{$count}'><span class='pending-count'>{$count}</span></span>";
            }
        }
    }

}