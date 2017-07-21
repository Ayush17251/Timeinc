<?php
/**
 * @file
 * menu_links_.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function menu_links__menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-forms.
  $menus['menu-forms'] = array(
    'menu_name' => 'menu-forms',
    'title' => 'Forms',
    'description' => '',
  );
  // Exported menu: menu-manage-your-benefits.
  $menus['menu-manage-your-benefits'] = array(
    'menu_name' => 'menu-manage-your-benefits',
    'title' => 'Manage Your Benefits',
    'description' => '',
  );
  // Exported menu: menu-need-to-know.
  $menus['menu-need-to-know'] = array(
    'menu_name' => 'menu-need-to-know',
    'title' => 'Need to Know',
    'description' => '',
  );
  // Exported menu: menu-popular-links.
  $menus['menu-popular-links'] = array(
    'menu_name' => 'menu-popular-links',
    'title' => 'Popular Links',
    'description' => '',
  );
  // Exported menu: menu-tools.
  $menus['menu-tools'] = array(
    'menu_name' => 'menu-tools',
    'title' => 'Tools',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Forms');
  t('Manage Your Benefits');
  t('Need to Know');
  t('Popular Links');
  t('Tools');

  return $menus;
}
