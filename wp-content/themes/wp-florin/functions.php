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