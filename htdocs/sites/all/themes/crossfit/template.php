<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

/**
 * Implements hook_block_view_alter().
 */
function crossfit_block_view_alter(&$data, $block) {
  // Check we get the right menu block (side bar)
  if ($block->bid == 47) {
    // change the theme wrapper for the first level
    $data['content']['#content']['#theme_wrappers'] = array('menu_tree__menu_block__1__level1');
  }
}

/**
 * Callback to alter the main menu menu block.
 */
function crossfit_menu_tree__menu_block__1(&$variables) {
  // Main menu (level 2 sidebar) using the menu block module.
  return '<ul>' . $variables['tree'] . '</ul>';
}
function crossfit_menu_tree__menu_block__1__level1(&$variables) {
  // Main menu (level 1 sidebar) using the menu block module.
  return '<nav id="smoothmenu1" class="ddsmoothmenu andawholelottawat"><ul>' . $variables['tree'] . '</ul></nav>';
}

/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function crossfit_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  crossfit_preprocess_html($variables, $hook);
  crossfit_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function crossfit_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function crossfit_preprocess_page(&$variables, $hook) {
  $block = module_invoke("block", "block_view", 3);
  $variables['copyright'] = $block['content'];

  // Add Google maps code on the contact page.
  if (isset($variables['node']->nid) && $variables['node']->nid == 11) {
    drupal_add_js('http://maps.google.com/maps/api/js?sensor=false');
    drupal_add_js('jQuery(document).ready(function () { jQuery("#block-system-main .content:first").prepend(jQuery("<div id=\"map_canvas\"></div>")); initialize(); });', 'inline');
  }
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function crossfit_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // crossfit_preprocess_node_page() or crossfit_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function crossfit_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function crossfit_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
function crossfit_preprocess_block(&$variables, $hook) {
  static $footer_first;
  if (!$footer_first && $variables['block']->region == 'footer') {
    $variables['classes_array'][] = 'first';
    $footer_first = TRUE;
  }
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
