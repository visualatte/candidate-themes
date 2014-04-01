<?php

/**
 * Implementation of hook_form_alter().
 * Change a couple of field labels, 'required' asterisks, etc.
 */

function bling_nateeanes_form_alter(&$form, &$form_state, $form_id) {
  $form['submitted']['billing_information']['payment_fields']['credit']['card_number']['#title'] = 'Credit Card Number:';
  $form['submitted']['billing_information']['payment_fields']['credit']['card_number']['#description'] = '(no spaces)';
  $form['submitted']['billing_information']['payment_fields']['credit']['card_number']['#required'] = TRUE;
  $form['submitted']['billing_information']['payment_fields']['credit']['expiration_date']['#title'] = 'Expiration Date:';
  $form['submitted']['billing_information']['payment_fields']['credit']['expiration_date']['card_expiration_month']['#required'] = TRUE;
  $form['submitted']['billing_information']['payment_fields']['credit']['card_cvv']['#title'] = 'Card Security Code:';
  $form['submitted']['billing_information']['payment_fields']['credit']['card_cvv']['#required'] = TRUE;
  $form['submitted']['billing_information']['payment_fields']['credit']['card_cvv']['#description'] = '<a href="#">What\'s this?</a>';
}

/**
 * Implementation of theme_preprocess_html().
 *
 * Adds 'viewport' meta tag, conditional stylesheets for IE,
 * and respond.js to make IE work with responsive design.
 */

function bling_nateeanes_preprocess_html(&$vars) {
  // Add the Meta Viewport tag.
  $tag = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport', 
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
    ),
  );
  drupal_add_html_head($tag, 'meta_viewport');
  
  // Add conditional stylesheets for IE.
  $options = array(
    'ie7' => array(
      'group' => CSS_THEME,
      'browsers' => array(
        'IE' => 'lte IE 7',
        '!IE' => FALSE,
      ),
      'weight' => 999,
      'every_page' => TRUE,
      'preprocess' => FALSE,
    ),
    'ie9' => array(
      'group' => CSS_THEME,
      'browsers' => array(
        'IE' => 'lte IE 9',
        '!IE' => FALSE,
      ),
      'weight' => 999,
      'every_page' => TRUE,
      'preprocess' => FALSE,
    )
  );
  foreach ($options as $key => $option) {
    drupal_add_css(drupal_get_path('theme', 'bling_nateeanes') . '/' . $key . '-and-below.css', $option);
  }
  
  // Add Respond.js
  $options = array(
    'type' => 'file',
    'cache' => FALSE,
    'weight' => 9999,
    'preprocess' => FALSE,
  );
  drupal_add_js(drupal_get_path('theme', 'bling_nateeanes') . '/js/respond.min.js', $options);
}

/**
 * Implementation of theme_preprocess_page().
 */

function bling_nateeanes_preprocess_page(&$vars) {
  // Add a suggestion for a per node type page template.
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] =  'page__' .  $vars['node']->type;
  }
}

function bling_nateeanes_css_alter(&$css) {
  // If we're only a donation page node, swap out the default css for one used
  // to render donation forms.
  if (arg(0) == 'node' && is_numeric(arg(1)) && (arg(2) == 'done' || !arg(2))) {
    $node = node_load(arg(1));
    if ($node->type == 'donation_form') {
      $theme_path = drupal_get_path('theme', 'bling_nateeanes');
      if (isset($css[$theme_path . '/layout.css'])) {
        $css[$theme_path . '/layout.css']['data'] = $theme_path . '/donation-layout.css';
      }
    }
  }
}
