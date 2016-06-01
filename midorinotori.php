<?php
/**
 * Midori No Tori
 * A Instagram plugin for WordPress
 *
 * Plugin Name: Midori No Tori (Green Bird)
 * Plugin URI: http://return-true.com
 * Author: Paul Robinson
 * Author URI: http://return-true.com/
 * Version: 1.0
 * Description: A Instagram plugin for WordPress
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: midorinotori
**/

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

// Require CodeStar Framework
require_once get_template_directory_uri() . '/lib/csf/cs-framework.php';

// Require CSF Options List Definition
require_once get_template_directory_uri() . '/lib/csf-options.php';
