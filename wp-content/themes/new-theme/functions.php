<?php 

function mytheme_setup() {
    // Add support for wide align and editor styles
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
  }
  add_action( 'after_setup_theme', 'mytheme_setup' );