<?php

/**
 * Implements hook_preprocess_page().
 */
function base_preprocess_page(&$vars) {

  // Remove the titles from the main and secondary menus.
  $vars['page']['main_menu']['#heading'] = t('');
  $vars['page']['secondary_menu']['#heading'] = t('');
  
}

/**
 * Implements hook_preprocess_views_view_unformatted().
 */
function base_preprocess_views_view_unformatted(&$vars) {
  // Add clearfix class to each row.
  foreach ($vars['rows'] as $id => $row) {
    $vars['classes'][$id][] = 'clearfix';
    $vars['classes_array'][$id] = implode(' ', $vars['classes'][$id]);
  }
}
