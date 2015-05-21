<?php defined('SYSPATH') or die('No direct script access.');
class Controller_PageTemplate extends Controller_Template
{
	 public $template = 'default';
	 public $_server;
	 public $_langs = array('pl' => "PL", 'en' => 'EN');
	 public $_auth;
	 public $_user_id;
	 public function before()
	 {
	 	parent::before();
	 }
	 public function after()
	 {
	 	$this->template->server = $this->_server;
		$this->template->langs	= $this->_langs;	
	 	$this->template->title = __('Home page');
	 	parent::after();
	 }
	 public function  __construct(Request $request, Response $response) {
	 	$this->_server	= $_SERVER['SERVER_NAME'];
		$this->_auth	= Auth::instance();
		if($this->_auth->logged_in()) $this->_user_id = $this->_auth->get_user()->pk();
        parent::__construct($request, $response);
		if($this->request->post('language'))
		{
			Cookie::set('language', $this->request->post('language'));
			$redirect = $this->_redirect($this->request->post('language'));
			HTTP::redirect($redirect);
			
		}
		if($this->request->param('language'))
		{
			I18n::lang($this->request->param('language'));
			Cookie::set('language', $this->request->param('language'));
		}
		else 
		{
			$language = Cookie::get('language');
			if($language)
			{
				$redirect = $this->_redirect($language);
				HTTP::redirect($redirect);
			}
			else 
			{
				$redirect = $this->_redirect();
				HTTP::redirect($redirect);	
			}	
		}
	}
	protected function _redirect($lang = "pl")
	{
		$return = 'http://'.$this->_server;
		$controller	= $this->request->controller();
		$action 	= $this->request->action();
		$page		= $this->request->param('page');
		if($lang)
		{
			$return .= '/'.$lang;
		}
		if($controller)
		{
			$return .= '/'.$controller;
		}
		if($action)
		{
			$return .= '/'.$action;
		}
		if($page)
		{
			$return .= '/page/'.$page;
		}
		return $return;
	}
	protected function _get_genres()
	{
		$genres = ORM::factory('Genres');
		$results = $genres->order_by('name', 'asc')->find_all()->as_array('id','name');
		return $results;
	}
	protected function _get_carries()
	{
		$carries = ORM::factory('Carrier');
		$results = $carries->find_all()->as_array('id','name');
		return $results;
	}
	protected function _get_locations()
	{
		$carries = ORM::factory('Location');
		$results = $carries->get_user_locations()->as_array('id','name');
		return $results;
	}
	protected function _set_error_status()
	{
		$this->template->content->set('error', TRUE);
		$this->response->body($this->template->content);
	}
	protected function _set_error_message($message = NULL)
	{
		$this->template->content->set('error_message', $message);
		$this->response->body($this->template->content);
	}
	protected function _set_success_status()
	{
		$this->template->content->set('success', TRUE);
		$this->response->body($this->template->content);
	}
	protected function _set_success_message($message = NULL)
	{
		$this->template->content->set('success_message', TRUE);
		$this->response->body($this->template->content);
	}
}
