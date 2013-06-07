<?php namespace Tsmith86\Redditapi;


class Connector extends Reddit
{
	
	function __construct()
	{
	
	}

	public function request($url)
	{
		return  file_get_contents($url);
	}

	public function send()
	{

	}


}