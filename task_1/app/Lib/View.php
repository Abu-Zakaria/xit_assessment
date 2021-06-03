<?php
namespace App\Lib;

class View
{
	public static function render($view_file)
	{
		return self::load_view($view_file);
	}

	private static function load_view($file)
	{
		return require(__DIR__ . '/../../resources/views/' . $file . '.php');
	}
}