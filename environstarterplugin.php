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
 * @package EnvironStarterPlugin
 * @version 1.0.0
 */

defined( 'ABSPATH' ) or die('Access Denied!');

if (file_exists( dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

class EnvironStarterPlugin
{
    // Methods go here...
}

$EnvironStarterPlugin = new EnvironStarterPlugin();