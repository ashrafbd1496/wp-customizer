<?php
//customizer panel,section and controls

function cust_customize_register($wp_customize)
{
    $wp_customize->add_section('cust_services',array(
        'title'=>__('Services','customizer'),
        'priority'=>'100',
        'description' => __('Services','customizer'),
        'capability' => 'edit_theme_options',
        
    ));

    $wp_customize->add_setting('cust_services_heading', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => 'Mission Statement',
        'transport' => 'refresh', // or postMessage
       
    ));

    $wp_customize->add_control('cust_services_heading_ctrl', array(
        'label' => __('Service Heading','customizer'),
        'type' => 'text',
        'section' => 'cust_services',
        'settings' => 'cust_services_heading',

    ));

    //subheading
    $wp_customize->add_setting('cust_services_subheading', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'transport' => 'refresh', // or postMessage

    ));

    $wp_customize->add_control('cust_services_subheading_ctrl', array(
        'label' => __('Service Sub Heading', 'customizer'),
        'type' => 'textarea',
        'section' => 'cust_services',
        'settings' => 'cust_services_subheading',

    ));

    //display subheading using checkbox
    $wp_customize->add_setting('cust_services_display_subheading', array(
        'default'=>1,
        'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control('cust_services_display_subheading_ctrl', array(
        'label' => __('Display Subheading', 'customizer'),
        'type' => 'checkbox',
        'section' => 'cust_services',
        'settings' => 'cust_services_display_subheading',

    ));

    //Dropdown demo section
    $wp_customize->add_section('cust_services-dropdown_section',array(
        'title'=>__('Services Dropdown Demo','customizer'),
        'priority'=>'50',
        
    ));
    $wp_customize->add_setting('cust_services-dropdown_setting', array(
        'defuailt'=>1,
        'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control('cust_services-dropdown_ctrl', array(
        'label' => __('Dropdown Pages', 'customizer'),
        'type' => 'dropdown-pages',
        'allow_addition'=>ture,
        'section' => 'cust_services-dropdown_section',
        'settings' => 'cust_services-dropdown_setting',

    ));

}
add_action('customize_register', 'cust_customize_register');
