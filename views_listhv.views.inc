<?php
/**
 * @file
 * Views-specific implementations and functions.
 */

/**
 * Implements hook_views_plugins().
 */
function views_listhv_views_plugins() {
  return array(
    'style' => array(
      'views_listhv_views_plugin' => array(
        'title' => t('Lists - Horizontally or Vertically'),
        'help' => t('Display content in list which can run either Horizontally or Vertically over multiple columns.'),
        'handler' => 'views_listhv_plugin_style_listhv',
        'theme' => 'views_view_listhv',
        'uses row plugin' => TRUE,
        'uses row class' => FALSE,
        'uses options' => TRUE,
        'uses grouping' => TRUE,
        'type' => 'normal',
      ),
    ),
  );
}
