<?php
/**
 * ---------------------------------------------------------------------
 * Deactivate 
 * ---------------------------------------------------------------------
 *
 * The deactivation class fires when the plugin is deactivated. 
 *
 * @package EnvironPlugin
 */

namespace Inc\Base;

class Deactivate 
{
	public static function deactivate() 
	{
		flush_rewrite_rules();
	}
}