<?php

register_sidebar(array(
  'name' => __('1st Right Sidebar'),
  'id' => 'first-right-sidebar',
  'description' => 'top bar',
  'before_widget' => '<div>',
  'after_widget' => '</div>'
  
));

register_sidebar(array(
  'name' => __('2nd Right Sidebar'),
  'id' => 'second-right-sidebar',
  'description' => '2nd top bar',
  'before_widget' => '<div>',
  'after_widget' => '</div>'
  
));



/*========================
Custom Post type 
======================= */

/*
function product_post_type() {
  register_post_type('products', 
  array(
    'labels' => array(
      'name' => __('Products'),
      'singular_name' => __('Product'),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'products'),
    )
  );
}
add_action('init', 'product_post_type'); */








