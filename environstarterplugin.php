<?php
/**
 * ---------------------------------------------------------------------
 * Environ Starter Plugin
 * ---------------------------------------------------------------------
 * PLugin Name:     Environ
 * Plugin URI:      https://environ.io
 * Description:     Environ Starter is an easy to use framework for modern day WordPress plugin development.
 * Author:          William McIntyre
 * Author URI:      https://environ.io
 * Version:         1.0.0
 * License:         MIT
 *
 * @package EnvironPlugin
 * @version 1.0.0
 */

defined( 'ABSPATH' ) or die('Access Denied!');

// Composer require autoload
require_once dirname(__FILE__) . '/vendor/autoload.php'; 

use Inc\Base\Activate;
use Inc\Base\Deactivate;

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}