<?php
/**
 * Custom menu walker
 */

class Description_Walker extends Walker_Nav_Menu{
 
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
  
       global $wp_query;
       $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
  
       $class_names = $value = '';
       $classes = empty( $item->classes ) ? array() : (array) $item->classes;
       $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
       $class_names = ' class="menu__item '. esc_attr( $class_names ) . '"';
       $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
  
       $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
       $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
       $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
       $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
  
       if ($depth == 0) {
          $description = ! empty( $item->description ) ? '<em>' . esc_attr( $item->description ).'</em>' : '';
       } else {
          $description = "";
       }
  
       $item_output = $args->before;
       $item_output .= '<a class="menu__elem link" '. $attributes .'>';
       $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
       $item_output .= '</a>';
       $item_output .= $args->after;
  
       $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
  
 }