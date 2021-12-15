<?php
/**
 * TAMUS Ordering Application Theme
 *
 * @package tamus-order
 * @since 0.1.0
 * @copyright Copyright (c) 2021, Texas A&M University System
 * @author Zachary K. Watkins
 * @license GPL-2.0+
 */

// Initialize Genesis.
require_once get_template_directory() . '/lib/init.php';

// Define some useful constants.
define( 'CLA_THEME_DIRNAME', 'tamus-order' );
define( 'CLA_THEME_DIRPATH', get_stylesheet_directory() );
define( 'CLA_THEME_DIRURL', get_stylesheet_directory_uri() );
define( 'CLA_THEME_TEXTDOMAIN', 'tamus-order' );
define( 'CLA_THEME_TEMPLATE_PATH', CLA_THEME_DIRPATH . '/templates' );

// Autoload all classes.
require_once CLA_THEME_DIRPATH . '/src/class-theme.php';
spl_autoload_register( '\TAMUS\Order\Theme::autoload' );
\TAMUS\Order\Theme::get_instance();
