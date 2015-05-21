<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Index extends Controller_PageTemplate
{
	public function action_index()
	{
		$this->template->content = View::factory('home');
	}
	
}
