<?php
namespace App\Lib;

class Route
{
	public static function get($uri, $action)
	{
		$type = $_SERVER['REQUEST_METHOD'];

		if($type == 'GET' && self::uriHas($uri))
		{
			$action_items = explode('@', $action);
			$controller = $action_items[0]; $method = $action_items[1];
			$controller = "\App\Http\\" . $controller;

			$controller = new $controller();

			$controller->{$method}();
		}
	}

	private static function uriHas($uri)
	{
		$request_uri = $_SERVER['REQUEST_URI'];
		$request_uri_items = explode('/', $request_uri);
		$j = $request_uri_items_len = count($request_uri_items);

		$uri_items = explode('/', $uri);

		$j--;
		for ($i = (count($uri_items) - 1); $i >= 0; $i--, $j--)
		{ 
			if($uri_items[$i] != $request_uri_items[$j])
			{
				return false;
			}
		}
		return true;
	}
}