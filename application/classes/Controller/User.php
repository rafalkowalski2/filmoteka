<?php defined('SYSPATH') or die('No direct script access.');
class Controller_User extends Controller_PageTemplate
{
	public function action_index()
	{
		HTTP::redirect(Request::current()->param('language').'/user/login');
	}
	public function action_login()
	{
		if(!$this->_auth->logged_in())
		{
			$this->template->content = View::factory('login');
			if($this->request->post('login'))
			{
				$this->email	= $this->request->post('email');
				$this->password	= $this->request->post('password');
				if($this->request->post('rememberme'))
				{
					if($this->_auth->login($this->email, $this->password, TRUE))
					{
						$this->_logged();
					}
					else 
					{
						$this->_error();
					}
				}
				else 
				{
					if($this->_auth->login($this->email, $this->password))
					{
						$this->_logged();
					}
					else 
					{
						$this->_error();
					}
				}	
			}
		}
		else 
		{
			HTTP::redirect(Request::current()->param('language').'/user/loggedin');
		}
	}
	private function _logged()
	{
		HTTP::redirect(Request::current()->param('language').'/user/logged');
	}
	private function _error()
	{
		$this->template->content->set('error', TRUE);
		$this->response->body($this->template->content);
	}
	private function _error_message($message)
	{
		$this->template->content->set('error_message', $message);
		$this->response->body($this->template->content);
	}
	public function action_logged()
	{
		if($this->_auth->logged_in()) $this->template->content = View::factory('logged');
		else $this->_unlogged();
	}
	public function action_loggedin()
	{
		if($this->_auth->logged_in()) $this->template->content = View::factory('loggedin');
		else $this->_unlogged();
	}
	public function _unlogged()
	{
		HTTP::redirect(Request::current()->param('language').'/user/unlogged');
	}
	public function action_logout()
	{
		Auth::instance()->logout();
	}
	public function action_unlogged()
	{
		$this->template->content = View::factory('unlogged');
	}
	public function action_signup()
	{
		if(!$this->_auth->logged_in())
		{
			$this->template->content = View::factory('signup');
			if($this->request->post('signup'))
			{
				try
				{
					
					$newuser = ORM::factory('User');
					$newuser->values($this->request->post());
					$external_value = array(
						'password' => $this->request->post('password'),
						'password_confirm' =>$this->request->post('password_confirm'),
					);
					$rule = Validation::factory($external_value);
					$rule->rule('password','not_empty');
					$rule->rule('password','min_length', array(':value', 8));
					$rule->rule('password_confirm', 'matches', array(':validation', ':field', 'password'));
					$newuser->save($rule);
					$role = ORM::factory('Role')->where('name', '=', 'login')->find();
					$newuser->add('roles', $role);
					$role = ORM::factory('Role')->where('name', '=', 'user')->find();
					$newuser->add('roles', $role);
					//$role = ORM::factory('Role')->where('name', '=', 'admin')->find();
					//$newuser->add('roles', $role);
				}
				catch(ORM_Validation_Exception $e)
		        {
					$errors = $e->errors('models');
					print_r($errors); 
					$this->_error_message($errors);
					$this->_error();	
		        }
			}
		}
		else 
		{
			HTTP::redirect(Request::current()->param('language').'/index');
		}
	}
	public function action_myprofile()
	{
		if($this->_auth->logged_in())
		{
			$this->template->content = View::factory('myprofile-info');
		}
		else
		{
			//przekierowanie na brak dostępu lub na logowanie 
		}
	}
	public function action_edit()
	{
		if($this->_auth->logged_in())
		{
			$this->template->content = View::factory('myprofile-edit');
		}
		else
		{
			//przekierowanie na brak dostępu lub na logowanie 
		}
	}
	public function action_changepassword()
	{
		if($this->_auth->logged_in())
		{
			$this->template->content = View::factory('myprofile-changepassword');
		}
		else
		{
			//przekierowanie na brak dostępu lub na logowanie 
		}
	}
}
