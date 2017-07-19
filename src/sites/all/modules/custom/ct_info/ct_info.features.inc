<?php
/**
 * @file
 * ct_info.features.inc
 */

/**
 * Implements hook_node_info().
 */
function ct_info_node_info() {
  $items = array(
    'info' => array(
      'name' => t('Info'),
      'base' => 'node_content',
      'description' => t('contents describing information about domain'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
