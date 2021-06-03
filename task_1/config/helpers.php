<?php

foreach(glob(__DIR__ . '/../app/Helpers/*.php') as $file)
{
	require_once($file);
}