
 );
 //register post type
 register_post_type ( 'event', array(
 'labels' => $labels,
 'has_archive' => true,
 'public' => true,
 'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
 'taxonomies' => array( 'post_tag', 'category' ),
 'exclude_from_search' => false,
 'capability_type' => 'post',
 'rewrite' => array( 'slug' => 'events' ),
 )
 );
 }
 add_action( 'init', 'lc_create_post_type' );