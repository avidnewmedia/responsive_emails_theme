<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function responsive_emails_theme_form_system_theme_settings_alter(&$form, &$form_state) {
  // Build theme settings form wrapper as tabs.
  $form['responsive_emails_theme'] = array(
    '#type' => 'vertical_tabs',
    '#title' => t('Theme Settings'),
  );

  // General settings theme settings form.
  $form['responsive_emails_theme']['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General Settings'),
    'footer' => array(
      '#type' => 'textfield',
      '#title' => t('Footer Content'),
      '#default_value'=> theme_get_setting('footer'),
      '#description' => t('Use this field to set the footer text.'),
    ),
    'use_default_theme_logo' => array(
      '#type' => 'checkbox',
      '#title' => t('Use default theme logo?'),
      '#default_value'=> theme_get_setting('use_default_theme_logo'),
      '#description' => t('Checking this box will ensure that the email template logo matches the default theme logo.'),
    ),
  );

}
