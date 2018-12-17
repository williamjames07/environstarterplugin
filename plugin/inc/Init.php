<?php
/**
 * ---------------------------------------------------------------------
 * Initiate Plugin 
 * ---------------------------------------------------------------------
 *
 * @package EnvironPlugin
 */

namespace Inc;

class Init
{

	/**
	 * Store all Classes inside an array
	 *
	 * @return array list
	 */
	public static function get_services() 
	{
		return [
			Admin\Admin::class,
			Base\Enqueue::class
		];
	}

	/**
	 * Loop through all Classes and initialize them,
	 * call the register(0 method if it exists
	 * 
	 * @return
	 */
	public static function register_services( $class ) 
	{
		foreach ( self::get_services() as $class ) {
			$service = self::instantiate( $class );	
			if ( method_exists( $service, 'register' )) {
				$service->register();
			}
		}
	}

	/**
	 * Initialize the Class
	 *
	 * @param  class $class  	class from services array
	 * @return class instance  	new instance of class
	 */
	private static function instantiate( $class ) 
	{
		$service = new $class();
		return $service;
	}
}