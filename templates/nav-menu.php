<?php

if (has_nav_menu('primary_navigation')) :

$menu_args = array(
  'theme_location'  => 'primary_navigation',
  'menu'            => '',
  'container'       => 'div',
  'container_class' => 'navbar-collapse collapse',
  'container_id'    => 'navbar',
  'menu_class'      => 'nav navbar-nav',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 2,
  'walker'          => new Foobar_Walker_Nav_Menu(),
);

wp_nav_menu( $menu_args );

endif;
