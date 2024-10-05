<?php
  // 菜单设置
  function register_custom_menu() {
    register_nav_menu( 'main', '主菜单' );
    register_nav_menu( 'right', '右侧菜单' );
  }

  add_action( 'after_setup_theme', 'register_custom_menu' );