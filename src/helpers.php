<?php

if ( ! function_exists('pr'))
{
	/**
	 * print_r a value and exit
	 *
	 * @param  any(???)  $array
	 * @return null
	 */
	function pr($q)
	{
		echo '<pre>';
		print_r($q);
		echo '</pre>';
		exit;
	}
}
if ( ! function_exists('vd'))
{
	/**
	 * use var_dump()  for debugging and exit
	 *
	 * @param 
	 * @return array
	 */
	function vd($q)
	{
		echo '<pre>';
		var_dump($q);
		echo '</pre>';
		exit;
	}
}
