<?php namespace Tsmith86\Redditapi;


use Tsmith86\Redditapi\RedditUsers as Users;
use Tsmith86\Redditapi\Connector as Connector;

class Reddit
{	
	public  $users; 
	
	private $connector; 
	
	private $apiUrl = "https://ssl.reddit.com/api/"; 
	public $redditUrl = "http://reddit.com/";

	private $modHash;
	private $session ; 

	function __construct()
	{

		$this->users =new  Users;
		$this->connector = new Connector; 
	}

	public function test()
	{
		echo "<pre>";
		print_r( json_decode($this->getsubreddit('home',20)));
		echo "</pre>";
	}

	public function getsubreddit($subreddit, $limit = 20 , $after  = null)
	{
		$url = $this->redditUrl."r/$subreddit.json?limit=$limit";

		if(!is_null($after))
		{
			$url .= "&after=$after";
		}

		return  $this->connector->request($url);
	}
}