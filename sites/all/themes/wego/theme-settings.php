<?php

drupal_add_js(drupal_get_path('theme', 'wego') . '/js/theme-setting/theme_settings.js');

/**
 * Implements hook_form_system_theme_settings_alter()
 */
function wego_form_system_theme_settings_alter(&$form, &$form_state) {

	$breadcrumbs_image = theme_get_setting('breadcrumbs_image');
    if (file_uri_scheme($breadcrumbs_image) == 'public') {
        $breadcrumbs_image = file_uri_target($breadcrumbs_image);
    }

    // Main settings wrapper
    $form['options'] = array(
        '#type' => 'vertical_tabs',
        '#default_tab' => 'defaults',
        '#weight' => '-10',
        '#attached' => array(
            'css' => array(drupal_get_path('theme', 'wego') . '/css/theme-setting/theme-options.css'),
        ),
    );

    // ----------- GENERAL -----------
    $form['options']['general'] = array(
        '#type' => 'fieldset',
        '#title' => t('General'),
    );

    // Breadcrumbs
    $form['options']['general']['breadcrumbs'] = array(
        '#type' => 'checkbox',
        '#title' => 'Breadcrumbs',
        '#default_value' => theme_get_setting('breadcrumbs'),
    );
	
	// Switcher
    $form['options']['general']['switcher'] = array(
        '#type' => 'checkbox',
        '#title' => 'Show Switcher Control',
        '#default_value' => theme_get_setting('switcher'),
    );
	
	// Breadcrumbs Image
	$form['options']['general']['breadcrumbs_image'] = array(
        '#type' => 'textfield',
        '#title' => 'Path to background breadcrumbs',
        '#default_value' => $breadcrumbs_image,
    );

    $form['options']['general']['breadcrumbs_upload'] = array(
        '#type' => 'file',
        '#title' => 'Upload background breadcrumbs',
        '#description' => 'Upload a new background breadcrumbs image.',
    );
	
	// Page Title
    $form['options']['general']['page_title'] = array(
        '#type' => 'textfield',
        '#title' => 'Page Title',
        '#default_value' => theme_get_setting('page_title'),
    );

    // SEO
    $form['options']['general']['seo'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">SEO</h3>',
    );

    // SEO Title
    $form['options']['general']['seo']['seo_title'] = array(
        '#type' => 'textfield',
        '#title' => 'Title',
        '#default_value' => theme_get_setting('seo_title'),
    );

    // SEO Description
    $form['options']['general']['seo']['seo_description'] = array(
        '#type' => 'textarea',
        '#title' => 'Description',
        '#default_value' => theme_get_setting('seo_description'),
    );

    // SEO Keywords
    $form['options']['general']['seo']['seo_keywords'] = array(
        '#type' => 'textarea',
        '#title' => 'Keywords',
        '#default_value' => theme_get_setting('seo_keywords'),
    );


    // ----------- LAYOUT -----------
    $form['options']['layout'] = array(
        '#type' => 'fieldset',
        '#title' => t('Layout'),
    );
	
	// ------ Header Settings ------
    $form['options']['layout']['header'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Header Settings</h3>',
    );
	
    $form['options']['layout']['header']['header_default'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Header Default',
		'#default_value' => theme_get_setting('header_default'),
    );
	$form['options']['layout']['header']['header_onepage'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Header Onepage',
		'#default_value' => theme_get_setting('header_onepage'),
    );
	
	
	// ------ Footer Settings ------
    $form['options']['layout']['footer'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Footer Settings</h3>',
    );
	
    $form['options']['layout']['footer']['footer_1'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Footer Style 1',
		'#default_value' => theme_get_setting('footer_1'),
    );
	$form['options']['layout']['footer']['footer_2'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Footer Style 2',
		'#default_value' => theme_get_setting('footer_2'),
    );
	$form['options']['layout']['footer']['footer_3'] = array(
        '#type' => 'textarea',
        '#title' => 'Page With Footer Style 3',
		'#default_value' => theme_get_setting('footer_3'),
    );
		
	
	// ----------- DESIGN -----------
    $form['options']['design'] = array(
        '#type' => 'fieldset',
        '#title' => 'Design',
    );
	
	// Layout Option
    $form['options']['design']['layout_style'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Layout Style</h3>',
    );
	
	$form['options']['design']['layout_style']['layout_option'] = array(
        '#type' => 'select',
        '#title' => 'Select a layout style:',
        '#default_value' => theme_get_setting('layout_option'),
        '#options' => array(
            'boxed' => 'Boxed',
            'widescreen' => 'Widescreen (default)',
        ),
    );
	
	
	// Header Option
    $form['options']['design']['header_style'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Header Style</h3>',
    );
	
    // Header Option
    $form['options']['design']['header_style']['header_option'] = array(
        '#type' => 'select',
        '#title' => 'Select a header style option:',
        '#default_value' => theme_get_setting('header_option'),
        '#options' => array(
            'header_default' => 'Header Default',
            'header_onepage' => 'Header Onepage',
        ),
    );
	
	// Footer Option
    $form['options']['design']['footer_style'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Footer Style</h3>',
    );
	
    // Footer Option
    $form['options']['design']['footer_style']['footer_option'] = array(
        '#type' => 'select',
        '#title' => 'Select a footer style option:',
        '#default_value' => theme_get_setting('footer_option'),
        '#options' => array(
            'footer1' => 'Footer 1 (default)',
            'footer2' => 'Footer 2',
            'footer3' => 'Footer 3',
        ),
    );
	
	// Color Option
    $form['options']['design']['color'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Color</h3>',
    );
	
	// Color Type
	$form['options']['design']['color']['color_type'] = array(
        '#type' => 'select',
        '#title' => 'Color Type',
        '#default_value' => theme_get_setting('color_type'),
        '#options' => array(
            'theme' => 'Theme Color (default)',
            'custom' => 'Custom Color',
        ),
    );
	
	// Color Color
    $form['options']['design']['color']['custom_color'] = array(
		'#type' => 'textfield',
        '#title' => 'Enter a custom color:',
        '#default_value' => theme_get_setting('custom_color'),
		'#states' => array (
          'visible' => array(
            'select[name = color_type]' => array('value' => 'custom')
          )
        )
    );

    // Color Scheme Option
    $form['options']['design']['color']['color_scheme'] = array(
        '#type' => 'radios',
        '#title' => 'Color Scheme',
        '#default_value' => theme_get_setting('color_scheme'),
        '#options' => array(
            '2d3e50' => 'item',
            'e7af62' => 'item',
            'f26262' => 'item',
            'f64989' => 'item',
            'ad86bb' => 'item',
            '00b988' => 'item',
            'c3512f' => 'item',
            'a0ce4e' => 'item',
            '627f9a' => 'item',
            '21cdec' => 'item',
            '26476a' => 'item',
            '362d50' => 'item',
        ),
		'#states' => array (
          'visible' => array(
            'select[name = color_type]' => array('value' => 'theme')
          )
        )
    );

    // Background
    $form['options']['design']['background'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">Background layout</h3>',
    );
	
	// Background Type
	$form['options']['design']['background']['background_type'] = array(
        '#type' => 'select',
        '#title' => 'Background Type',
        '#default_value' => theme_get_setting('background_type'),
        '#options' => array(
            'color' => 'Background Color',
            'image' => 'Background Image (default)',
        ),
    );
	
	// Background Color
    $form['options']['design']['background']['background_color'] = array(
		'#type' => 'textfield',
        '#title' => 'Enter a background color:',
        '#default_value' => theme_get_setting('background_color'),
		'#states' => array (
          'visible' => array(
            'select[name = background_type]' => array('value' => 'color')
          )
        )
    );
	
    // Background Image
	$form['options']['design']['background']['background_image'] = array(
        '#type' => 'radios',
        '#title' => 'Select a background image:',
        '#default_value' => theme_get_setting('background_image'),
        '#options' => array(
            'item-1' => 'item',
            'item-2' => 'item',
            'item-3' => 'item',
            'item-4' => 'item',
            'item-5' => 'item',
            'item-6' => 'item',
            'item-7' => 'item',
            'item-8' => 'item',
            'item-9' => 'item',
            'item-10' => 'item',
            'item-11' => 'item',
            'item-12' => 'item',
        ),
		'#states' => array (
          'visible' => array(
            'select[name = background_type]' => array('value' => 'image')
          )
        )
    );

    // CSS
    $form['options']['design']['css'] = array(
        '#type' => 'fieldset',
        '#title' => '<div class="plus"></div><h3 class="options_heading">CSS</h3>',
    );

    // User CSS
    $form['options']['design']['css']['user_css'] = array(
        '#type' => 'textarea',
        '#title' => 'Add your own CSS',
        '#default_value' => theme_get_setting('user_css'),
    );
	
	// Submit Button
    $form['#submit'][] = 'wego_settings_submit';
}

function wego_settings_submit($form, &$form_state) {
    // Get the previous value
    $previous = 'public://' . $form['options']['general']['breadcrumbs_image']['#default_value'];

    $file = file_save_upload('breadcrumbs_upload');
    if ($file) {
        $parts = pathinfo($file->filename);
        $destination = 'public://' . $parts['basename'];
        $file->status = FILE_STATUS_PERMANENT;

        if (file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
            $_POST['breadcrumbs_image'] = $form_state['values']['breadcrumbs_image'] = $destination;
            if ($destination != $previous) {
                return;
            }
        }
    } else {
        // Avoid error when the form is submitted without specifying a new image
        $_POST['breadcrumbs_image'] = $form_state['values']['breadcrumbs_image'] = $previous;
    }
}


?>