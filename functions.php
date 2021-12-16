<?php
/**
 * TAMUS Ordering Application Theme
 *
 * @package   TAMUS Ordering Application
 * @since     0.1.0
 * @copyright Copyright (c) 2021, Texas A&M University System
 * @author    Zachary K. Watkins <zwatkins2@tamu.edu>
 * @license   GPL-2.0+
 */

// Initialize Genesis.
require_once get_template_directory() . '/lib/init.php';

// Define some useful constants.
define( 'TAMUS_ORDER_THEME_DIRNAME', 'tamus-order-theme-wp' );
define( 'TAMUS_ORDER_THEME_DIRPATH', get_stylesheet_directory() );
define( 'TAMUS_ORDER_THEME_DIRURL', get_stylesheet_directory_uri() );
define( 'TAMUS_ORDER_THEME_TEXTDOMAIN', 'tamus-order-theme-wp' );
define( 'TAMUS_ORDER_THEME_TEMPLATE_PATH', TAMUS_ORDER_THEME_DIRPATH . '/templates' );

// Autoload all classes.
require_once TAMUS_ORDER_THEME_DIRPATH . '/src/class-theme.php';
spl_autoload_register( '\TAMUS\Order\Theme::autoload' );
\TAMUS\Order\Theme::get_instance();
