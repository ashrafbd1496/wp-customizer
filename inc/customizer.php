<?php
//customizer panel,section and controls

function cust_customize_register($wp_customize)
{
    $wp_customize->add_section('cust_services',array(
        'title'=>__('Services','customizer'),
        'priority'=>'100',
        'description' => __('Services','customizer'),
        'capability' => 'edit_theme_options',
        'active_callback'=>function (){
            return is_page_template('page-templates/landing.php');
        }
        
    ));

    $wp_customize->add_setting('cust_services_heading', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => 'Mission Statement',
        'transport' => 'postMessage', // or postMessage
        
       
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
        'active_callback'=>'display_service_subheading',

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

    //Service Section icon color change
    $wp_customize->add_setting('cust_service_icon_color_setting',array(
        'default'=>'#dd2d6a',
        'transport'=>'refresh',
    ));
    $wp_customize->add_control(new WP_customize_Color_Control($wp_customize,'cust_service_icon_color_ctrl',array(
        'label'=>__('Icon Color','customizer'),
        'section'=>__('cust_services','customizer'),
        'settings'=>__('cust_service_icon_color_setting','customizer'),
    )));

    //Service items display 
    $wp_customize->add_setting('cust_services_number_of_items_setting',array(
        'default'=>'4',
        'transport'=>'refresh',
    ));
  $wp_customize->add_control('cust_services_number_of_items_ctrl',array(
    'label'=>__('Number of Items','customizer'),
    'section'=>'cust_services',
    'settings'=>'cust_services_number_of_items_setting',
    'type'=>'select',
    'choices'=>array(
        '4'=>'3 In Each Row',
        '6'=>'2 In Each Row',
    )
  ));

  //About Page Customizer Options
  $wp_customize->add_section('cust_about_section',array(
    'title'=>__('About Page','customizer'),
    'priority'=>'50',
    'active_callback'=> function() {
        if(is_page_template('page-templates/about.php')){
            return true;
        }
        return false;
    }
  
));

$wp_customize->add_setting('cust_about_setting', array(
    'default'=>'About Page Heading',
    'transport' => 'refresh', // or postMessage
   
));

$wp_customize->add_control('cust_about_ctrl', array(
    'label' => __('About Page Heading','customizer'),
    'type' => 'text',
    'section' => 'cust_about_section',
    'settings' => 'cust_about_setting',

));
  

}
add_action('customize_register', 'cust_customize_register');

function display_service_subheading(){
    if(get_theme_mod('cust_services_display_subheading')==1){
        return true;
    }
    return false;
}
