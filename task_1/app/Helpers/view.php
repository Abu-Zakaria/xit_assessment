<?php

if(!function_exists('load_js'))
{
	function load_js($file_path)
	{
		$file_path = 'resources/js/' . $file_path;
		echo "<script src=\"$file_path\"></script>";
	}
}

if(!function_exists('load_css'))
{
	function load_css($file_path)
	{
		$file_path = 'resources/css/' . $file_path;
		echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$file_path\" />";
	}
}
