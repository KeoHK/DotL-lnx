<?php

/**
 * @file
 * The admin "When" tab.
 *
 * Admin functionality that determines when the splash page should show up
 * on the website.
 */

/**
 * "When" settings tab.
 */
function splashify_admin_when_form($form, &$form_state) {
  $form = array();

  $form['description'] = array(
    '#markup' => '<p>' . t('When should the splash page show up? This is also where the main mobile option is defined.') . '</p>',
  );

  $form['splashify_when_anonymous'] = array(
    '#type' => 'checkbox',
    '#title' => t('Only show to anonymous users.'),
    '#default_value' => variable_get('splashify_when_anonymous', FALSE),
  );

  // Add control to disable referrer check
  // @see splashify_init.js
  $form['disable_referrer_check'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable referrer check'),
    '#default_value' => variable_get('disable_referrer_check', 0),
    '#description' => t('Show splash even when page was loaded from an internal page.'),
  );

  $form['desktop'] = array(
    '#type' => 'fieldset',
    '#title' => t('Desktop Settings'),
  );

  $form['desktop']['splashify_when_desktop_frequency'] = array(
    '#type' => 'select',
    '#title' => t('How often should visitors see the splash page?'),
    '#default_value' => variable_get('splashify_when_desktop_frequency', 'never'),
    '#options' => array(
      'never' => t('Never (off)'),
      'always' => t('Always'),
      'once' => t('Once'),
      'daily' => t('Daily'),
      'weekly' => t('Weekly'),
    ),
  );

  $form['mobile'] = array(
    '#type' => 'fieldset',
    '#title' => t('Mobile Settings'),
  );

  $form['mobile']['splashify_when_mobile'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Unique Mobile Splash'),
    '#default_value' => variable_get('splashify_when_mobile', 0),
    '#disabled' => FALSE,
    '#ajax' => array(
      'callback' => 'splashify_ajax_when_mobile_callback',
      'wrapper' => 'when-mobile-settings',
      'method' => 'replace',
      'effect' => 'slide',
    ),
  );

  // Set a variable that is either defined by the ajax checkbox, or a
  // previously saved value.
  if (isset($form_state['values']['splashify_when_mobile'])) {
    $when_mobile_set = $form_state['values']['splashify_when_mobile'];
  }
  else {
    $when_mobile_set = variable_get('splashify_when_mobile', 0);
  }

  $form['mobile']['options']['begin'] = array('#markup' => '<div id="when-mobile-settings">');

  // If the mobile splash is enabled, display the mobile options.
  if ($when_mobile_set == 1) {
    $form['mobile']['options']['splashify_when_mobile_frequency'] = array(
      '#type' => 'select',
      '#title' => t('How often should mobile visitors see the mobile splash page?'),
      '#default_value' => variable_get('splashify_when_mobile_frequency', 'never'),
      '#options' => array(
        'never' => t('Never (off)'),
        'always' => t('Always'),
        'once' => t('Once'),
        'daily' => t('Daily'),
        'weekly' => t('Weekly'),
      ),
    );

    $form['mobile']['options']['splashify_when_mobile_test'] = array(
      '#type' => 'checkbox',
      '#title' => t('Test Mobile'),
      '#default_value' => variable_get('splashify_when_mobile_test', 0),
      '#description' => t('Turn this option on to force the mobile settings to take affect so you can test from your desktop browser.'),
    );
  }

  $form['mobile']['options']['end'] = array('#markup' => '</div>');

  $form['#submit'][] = 'splashify_admin_when_form_submit';
  return system_settings_form($form);
}

/**
 * Implements form submit handler.
 */
function splashify_admin_when_form_submit($form, &$form_state) {
  if ($form_state['values']['splashify_when_mobile'] != 1) {
    // Unset these values, if the mobile option is disabled.
    variable_set('splashify_when_mobile_frequency', 'never');
    variable_set('splashify_when_mobile_test', 0);
  }
}

/**
 * Ajax callback for the "enable mobile" checkbox.
 */
function splashify_ajax_when_mobile_callback($form, &$form_state) {
  return $form['mobile']['options'];
}
}

/**
 * Implements form submit handler.
 */
function splashify_admin_when_form_submit($form, &$form_state) {
  if ($form_state['values']['splashify_when_mobile'] != 1) {
    // Unset these values, if the mobile option is disabled.
    variable_set('splashify_when_mobile_frequency', 'never');
    variable_set('splashify_when_mobile_test', 0);
  }
}

/**
 * Ajax callback for the "enable mobile" checkbox.
 */
function splashify_ajax_when_mobile_callback($form, &$form_state) {
  return $form['mobile']['options'];
}
