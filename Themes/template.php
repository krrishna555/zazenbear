<?php

/**
 * @file
 * Contains functions to alter Drupal's markup for the Zen theme.
 *
 * IMPORTANT WARNING: DO NOT MODIFY THIS FILE.
 *
 * The base Zen theme is designed to be easily extended by its sub-themes. You
 * shouldn't modify this or any of the CSS or PHP files in the root zen/ folder.
 * See the online documentation for more information:
 *   https://drupal.org/documentation/theme/zen
 */

// Auto-rebuild the theme registry during theme development.
if (theme_get_setting('zazenbear_rebuild_registry') && !defined('MAINTENANCE_MODE')) {
  // Rebuild .info data.
  system_rebuild_theme_data();
  // Rebuild theme registry.
  drupal_theme_rebuild();
}


function zazenbear_preprocess_node(&$variables, $hook) {
  // Add $unpublished variable.
  $variables['unpublished'] = (!$variables['status']) ? TRUE : FALSE;

  // Add pubdate to submitted variable.
  $variables['pubdate'] = '<time pubdate datetime="' . format_date($variables['node']->created, 'custom', 'c') . '">' . date('F d , Y', strtotime($variables['date'])) . '</time>';
  if ($variables['display_submitted']) {
    $variables['submitted'] = t('By Author !username <br/> !datetime', array('!username' => $variables['name'], '!datetime' => $variables['pubdate']));
  }

  // Add a class for the view mode.
  if (!$variables['teaser']) {
    $variables['classes_array'][] = 'view-mode-' . $variables['view_mode'];
  }

  // Add a class to show node is authored by current user.
  if ($variables['uid'] && $variables['uid'] == $GLOBALS['user']->uid) {
    $variables['classes_array'][] = 'node-by-viewer';
  }

  $variables['title_attributes_array']['class'][] = 'node__title';
  $variables['title_attributes_array']['class'][] = 'node-title';
}

function zazenbear_preprocess_page(&$vars) {
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
  $item_count = 0;
    $items = uc_cart_get_contents();
        if (!empty($items)) foreach ($items as $item) {
            $item_count += $item->qty;
}
    $vars['cart_reminder'] = $item_count;
}




/**
 * Return a themed breadcrumb trail.
 *
 * @param $variables
 *   - title: An optional string to be used as a navigational heading to give
 *     context for breadcrumb links to screen-reader users.
 *   - title_attributes_array: Array of HTML attributes for the title. It is
 *     flattened into a string within the theme function.
 *   - breadcrumb: An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */
function zazenbear_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $output = '';

  // Determine if we are to display the breadcrumb.
  $show_breadcrumb = theme_get_setting('zen_breadcrumb');
  if ($show_breadcrumb == 'yes' || $show_breadcrumb == 'admin' && arg(0) == 'admin') {

    // Optionally get rid of the homepage link.
    $show_breadcrumb_home = theme_get_setting('zen_breadcrumb_home');
    if (!$show_breadcrumb_home) {
      array_shift($breadcrumb);
    }

    // Return the breadcrumb with separators.
    if (!empty($breadcrumb)) {
      $breadcrumb_separator = filter_xss_admin(theme_get_setting('zen_breadcrumb_separator'));
      $trailing_separator = $title = '';
      if (theme_get_setting('zen_breadcrumb_title')) {
        $item = menu_get_item();
        if (!empty($item['tab_parent'])) {
          // If we are on a non-default tab, use the tab's title.
          $breadcrumb[] = check_plain($item['title']);
        }
        else {
          $breadcrumb[] = drupal_get_title();
        }
      }
      elseif (theme_get_setting('zen_breadcrumb_trailing')) {
        $trailing_separator = $breadcrumb_separator;
      }

      // Provide a navigational heading to give context for breadcrumb links to
      // screen-reader users.
      if (empty($variables['title'])) {
        $variables['title'] = t('You are here');
      }
      // Unless overridden by a preprocess function, make the heading invisible.
      if (!isset($variables['title_attributes_array']['class'])) {
        $variables['title_attributes_array']['class'][] = 'element-invisible';
      }
      // Build the breadcrumb trail.
      $output = '<nav class="breadcrumb" role="navigation">';
      $output .= '<h2' . drupal_attributes($variables['title_attributes_array']) . '>' . $variables['title'] . '</h2>';
      $output .= '<ol><li>   ' . implode($breadcrumb_separator. '   </li><li>   ', $breadcrumb) .  $trailing_separator  . '</li></ol>';
      $output .= '</nav>';
    }
  }
  
     $actual_link = $_SERVER[REQUEST_URI];
	 $phoneChunks = explode("/", $actual_link);
     $secondparm= $phoneChunks[2];
	 $firstparm= $phoneChunks[1];
	 if(!empty($secondparm)){
	  if($firstparm=='jewelery-list'){
	  $output = '<nav class="breadcrumb" role="navigation">';
      $output .= '<ol><li> <a href="/">HOME </a> / <a href="/shop"> &nbsp;SHOP </a> /  <li> <a href="/jewelry">JEWELERY </a> </li> / <li> '. $secondparm.'</li></ol>';
      $output .= '</nav>';
	}
	
	if($firstparm=='fashion'){
	   $output = '<nav class="breadcrumb" role="navigation">';
       $output .= '<ol><li> <a href="/shop">HOME </a> / <a href="/shop">&nbsp;SHOP  </a> / <li> <a href="/fashion">FASHION </a> </li> / <li>  '. $secondparm.'</li></ol>';
       $output .= '</nav>';
	}
	if($firstparm=='home'){
	  $output = '<nav class="breadcrumb" role="navigation">';
      $output .= '<ol><li> <a href="/shop">HOME </a> / <a href="/shop"> &nbsp;SHOP  </a>  /<li> <a href="/home">HOME </a> </li> / <li> '. $secondparm.'</li></ol>';
      $output .= '</nav>';
	}

   } else {
   
	if($firstparm =='jewelry'){
	   $output = '<nav class="breadcrumb" role="navigation">';
       $output .= '<ol><li> <a href="/shop">HOME </a> / <a href="/shop">&nbsp;SHOP  </a> / <li> JEWELERY </li></ol>';
       $output .= '</nav>';
	}
	if($firstparm=='fashion'){
	   $output = '<nav class="breadcrumb" role="navigation">';
       $output .= '<ol><li> <a href="/shop">HOME </a> / <a href="/shop">&nbsp;SHOP  </a> / <li> FASHION </li></ol>';
       $output .= '</nav>';
	}
	if($firstparm=='home'){
	   $output = '<nav class="breadcrumb" role="navigation">';
       $output .= '<ol><li> <a href="/shop">HOME </a> / <a href="/shop">&nbsp;SHOP  </a> / <li> Home </li></ol>';
       $output .= '</nav>';
	}
   }
   return $output;
}

/** Get the Path after domain name **/
function zazenbear_get_pagePath() {
 //Get the URL string
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 
 return $pageURL;
}


/** Get the URL of just the domain name **/
function zazenbear_get_domainPath() {
if ($_SERVER["HTTPS"] == "on") {
 $domainPath='https://'.$_SERVER['HTTP_HOST'];
 } else {
  $domainPath='http://'.$_SERVER['HTTP_HOST'];
  }

return $domainPath;
}
