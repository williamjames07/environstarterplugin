<?php
/**
 * ---------------------------------------------------------------------
 * Activate 
 * ---------------------------------------------------------------------
 *
 * The activation class fires when the plugin is activated. 
 *
 * @package EnvironPlugin
 */

namespace Inc\Base;

class Activate
{
	public static function activate() 
	{
		flush_rewrite_rules();
	}
}