<?php
namespace App\Lib;

class View
{
	public static function render($view_file, $data = null)
	{
		if($data)
		{
			foreach($data as $key => $value)
			{
				${$key} = $value;
			}
		}
		require(self::get_file_path($view_file));
	}

	private static function get_file_path($file)
	{
		return __DIR__ . '/../../resources/views/' . $file . '.php';
	}
}