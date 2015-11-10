<?php
/**
 * Sample App
 *
 * @package     Sample App
 * @author      Andrew Kustes
 * @since       Version 1.0   
 */


class Sample {

	// Set Properties
	static $name = 'Hello World!';
	var $dname;

	function __construct()
	{
		$this->dname = 'Hello World!';
	}

	// Types of Properties and Methods
	public static function name()
	{
		return Self::$name;
	}

	public function dname()
	{
		return $this->dname;
	}

	// Display Name
	public function display_name($text)
	{
		$output = $text;

		return $output;
	}

}