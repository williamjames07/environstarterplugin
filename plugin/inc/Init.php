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
	public function get_services() 
	{
		return [
			Admin\Admin::class,
			Base\Enqueue::class
		];
	}

	public static function register_services( $class ) 
	{
		foreach ( self::get_services() as $class ) {
			$service = self::instantiate( $class );	
			if ( method_exists( $service, 'register' )) {
				$service->register();
			}
		}
	}

	private static function instantiate( $class ) 
	{
		$service = new $class();
		return $service;
	}
}