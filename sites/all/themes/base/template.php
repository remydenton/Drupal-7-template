<?php

/**
 * Implements hook_preprocess_page().
 */
function base_preprocess_page(&$variables) {

  // Remove the titles from the main and secondary menus.
  $variables['page']['main_menu']['#heading'] = t('');
  $variables['page']['secondary_menu']['#heading'] = t('');
  
}

