<?php

/**
 * Plugin Name:       SM - Prefetch
 * Plugin URI:        https://wordpress.org/plugins/sm-prefetch/
 * Description:       This is not an normal Plugin. This plugin will make your website load blazing fast using Prefetch Algorithm. And it's run automatically! No settings needed. Easy right?
 * Version:           1.5.1
 * Author:            Sulaiman Misri
 * Author URI:        https://github.com/msulaimanmisri
 * Text Domain:       sm-prefetch
 * Domain Path:       /languages
 * Tags:              Prefetch, Speed Optimization, Sulaiman Misri, Google
 * Tested up to:      6.1.1
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    require 'includes/prefetch-wc.php';
} else {
    require 'includes/prefetch.php';
}