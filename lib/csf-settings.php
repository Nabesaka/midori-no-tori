<?php

class mnt_settings {

  public function __construct()
  {
    // Filter/Actions to use when class is instanced
    add_filter( 'cs_framework_settings', array($this, 'csf_framework_settings') );
  }

  public function csf_framework_settings( $settings )
  {

    $settings = array(); // Remove old options

    $settings = array(
        'menu_title'        => 'Midori No Tori',
        'menu_type'         => 'options',
        'menu_slug'         => 'midori-no-tori-options',
        'ajax_save'         => false,
        'show_reset_all'    => true,
        'framework_title'   => 'Midori No Tori Instagram Plugin <small>by Paul Robinson (<a href="http://return-true.com">Return True</a>)</small>'
    );

    return $settings;
  }

}

// Create instance
new mnt_settings;
