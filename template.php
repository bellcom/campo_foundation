<?php

/**
 * Implements theme_links() targeting the main menu specifically
 * Outputs Foundation Nav bar http://foundation.zurb.com/docs/navigation.php
 * 
 */

function campo_foundation_menu_tree__menu_block__2($variables) {
  return '<ul class="side-nav">'.$variables['tree']."</ul>";
}
function campo_foundation_menu_tree__menu_block__3($variables) {
  return '<ul class="side-nav">'.$variables['tree']."</ul>";
}
function campo_foundation_menu_tree__menu_block__5($variables) {
  return '<ul class="side-nav">'.$variables['tree']."</ul>";
}

//function STARTER_links__system_main_menu($variables) {
//  // Get all the main menu links
//  $menu_links = menu_tree_output(menu_tree_all_data('main-menu'));
//  
//  // Initialize some variables to prevent errors
//  $output = '';
//  $sub_menu = '';
//
//  foreach ($menu_links as $key => $link) {
//    // Add special class needed for Foundation dropdown menu to work
//    !empty($link['#below']) ? $link['#attributes']['class'][] = 'has-flyout' : '';
//
//    // Render top level and make sure we have an actual link
//    if (!empty($link['#href'])) {
//      $output .= '<li' . drupal_attributes($link['#attributes']) . '>' . l($link['#title'], $link['#href']);
//      // Get sub navigation links if they exist
//      foreach ($link['#below'] as $key => $sub_link) {
//        if (!empty($sub_link['#href'])) {
//          $sub_menu .= '<li>' . l($sub_link['#title'], $sub_link['#href']) . '</li>';
//        }
//        
//      }
//      $output .= !empty($link['#below']) ? '<a href="#" class="flyout-toggle"><span> </span></a><ul class="flyout">' . $sub_menu . '</ul>' : '';
//      
//      // Reset dropdown to prevent duplicates
//      unset($sub_menu);
//      $sub_menu = '';
//      
//      $output .=  '</li>';
//    }
//  }
//  return '<ul class="nav-bar">' . $output . '</ul>';
//}

/**
iii * Implements template_preprocess_html().
 * 
 */
function campo_foundation_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//  
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external'); 

  // Add body class according to taxonomy item.
  if(arg(0)=='node' && is_numeric(arg(1))) {
        $node = node_load(arg(1)); 
        $results = taxonomy_node_get_terms($node);
        if(is_array($results)) {
            foreach ($results as $item) {
               $variables['classes_array'][] = "taxonomy-".strtolower(drupal_clean_css_identifier($item->name));
            }
       }
   }  

}
function taxonomy_node_get_terms($node, $key = 'tid') {
    static $terms;

    if (!isset($terms[$node->vid][$key])) {
        $query = db_select('taxonomy_index', 'r');
        $t_alias = $query->join('taxonomy_term_data', 't', 'r.tid = t.tid');
        $v_alias = $query->join('taxonomy_vocabulary', 'v', 't.vid = v.vid');
        $query->fields( $t_alias );
        $query->condition("r.nid", $node->nid);
        $result = $query->execute();
        $terms[$node->vid][$key] = array();
        foreach ($result as $term) {
            $terms[$node->vid][$key][$term->$key] = $term;
        }
    }
    return $terms[$node->vid][$key];
}

/**
 * Implements template_preprocess_page
 *
 */
function campo_foundation_preprocess_page(&$variables) {
  // the 4 botilbud page. node type is center. 
  if (!empty($variables['node']) && $variables['node']->type == 'center') {
/*    if ($variables['node']->nid == 6 || $variables['node']->nid == 7 || $variables['node']->nid == 67 || $variables['node']->nid == 66 || $variables['node']->nid == 69) {
      $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->nid;
    } 
    else {*/
      $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
   /*}*/
  }
  // the node-type: page, aka - afdelinger underside, there are 2 special page-pages: botilbud, center campo forside(nid = 119).
  if (!empty($variables['node']) && $variables['node']->type == 'page' &&  $variables['node']->title != 'Botilbud') {
    if ($variables['node']->nid == 119) {
      $variables['theme_hook_suggestions'][] = 'page__node__centercampo';
    }
    else {
      $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
    }
  }
  if (!empty($variables['node']) && $variables['node']->type == 'organisationsside') {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
  if (!empty($variables['node']) && $variables['node']->type == 'bostedlokale') {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
  if (!empty($variables['node']) && $variables['node']->type == 'video') {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  }
  if (!empty($variables['node']) && $variables['node']->type == 'underside') {
    if ($variables['node']->nid == 160) {
      $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->nid;
    }
    else {
      $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
    }
  }

}

/**
 * Implements template_preprocess_node
 *
 */
//function STARTER_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
function campo_foundation_preprocess_block(&$variables) {

//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//  
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//  
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//    
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
   // }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
}

//function STARTER_preprocess_views_view(&$variables) {
//}

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function STARTER_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function STARTER_preprocess_views_view_fields(&$variables) {
//}

/**
 * Status messages in reveal modal
 *
 */
//function STARTER_status_messages($variables) {
//  $display = $variables['display'];
//  $output = ''; 
//
//  $status_heading = array(
//    'status' => t('Status message'), 
//    'error' => t('Error message'), 
//    'warning' => t('Warning message'),
//  );  
//  foreach (drupal_get_messages($display) as $type => $messages) {
//    $output .= "<div class=\"messages $type\">\n";
//    if (!empty($status_heading[$type])) {
//      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
//    }   
//    if (count($messages) > 1) {
//      $output .= " <ul>\n";
//      foreach ($messages as $message) {
//        $output .= '  <li>' . $message . "</li>\n";
//      }   
//      $output .= " </ul>\n";
//    }   
//    else {
//      $output .= $messages[0];
//    }   
//    $output .= "</div>\n";
//  }
//  if ($output != '') {
//    drupal_add_js("jQuery(document).ready(function() { jQuery('#status-messages').reveal(); 
//            });", array('type' => 'inline', 'scope' => 'footer'));
//    $output = '<div id="status-messages" class="reveal-modal expand" >'. $output;
//    $output .= '<a class="close-reveal-modal">&#215;</a>';
//    $output .= "</div>\n";
//  }
//  return $output;
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function STARTER_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span class="has-tip tip-top radius" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function STARTER_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function STARTER_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $form['actions']['submit']['#attributes'] = array('class' => array('primary', 'button', 'radius'));
//  }
//}

// Sexy preview buttons
//function STARTER_form_comment_form_alter(&$form, &$form_state) {
//  $form['actions']['preview']['#attributes']['class'][] = array('class' => array('secondary', 'button', 'radius'));
//}
