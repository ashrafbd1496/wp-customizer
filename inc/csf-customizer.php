<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'csf_customizer';

//
// Create customize options
//
CSF::createCustomizeOptions( $prefix );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'    => 'CSF - Customizer',
  'priority' => 1,
  'fields'   => array(

    //
    // A text field
    //
    array(
      'id'    => 'about_heading',
      'type'  => 'text',
      'title' => 'About Heading',
      'default'=>__('About Heading','customizer'),
    ),

    array(
      'id'    => 'about_description',
      'type'  => 'textarea', 
      'title' => 'About Description',
      
    ),
    array(
      'id'          => 'select_page',
      'type'        => 'select',
      'title'       => 'Select a page',
      'placeholder' => 'Select a page',
      'options'     => 'pages',
    ),
    array(
      'id'          => 'opt-select-8',
      'type'        => 'select',
      'title'       => 'Select with multiple AJAX search Pages',
      'chosen'      => true,
      'multiple'    => true,
      'sortable'    => true,
      'ajax'        => true,
      'options'     => 'pages',
      'placeholder' => 'Select pages',
    ),
    array(
      'id'          => 'opt-select-12',
      'type'        => 'select',
      'title'       => 'Select with posts',
      'placeholder' => 'Select a post',
      'options'     => 'posts',
    ),

  )
) );
