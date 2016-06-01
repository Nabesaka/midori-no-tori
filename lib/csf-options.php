<?php

class mnt_options {

  public function __construct()
  {
    // Filter/Actions to use when class is instanced
    add_filter( 'cs_framework_options', array($this, 'csf_framework_options') );
  }

  public function csf_framework_options( $options )
  {

    $options = array(); // Remove old options

    // Define Options
    $options[]    = array(
      'name'      => 'section_unique_id',
      'title'     => 'First Section',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
        array(
          'id'    => 'option_id',
          'type'  => 'text',
          'title' => 'First Option',
        ),
        array(
          'id'    => 'another_option_id',
          'type'  => 'textarea',
          'title' => 'Secondary Option',
        ),
      )
    );

    return $options;
  }

}

// Create instance
new mnt_options;
