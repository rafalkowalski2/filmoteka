<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Location extends Controller_PageTemplate
{
	public function action_add()
	{
		if($this->_auth->logged_in('user'))
		{
			$this->template->content = View::factory('library-add-location');
			if($this->request->post('add-location'))
			{
				try
				{
					$location = ORM::factory('Location');
					$location->name = $this->request->post('location');
					$location->save();
					$user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
					$location->add('users', $user);
					$this->_set_success_status();
				}
				catch(ORM_Validation_Exception $e)
				{
					$errors = $e->errors('models');
					$this->_set_error_status();
					$this->_set_error_message($errors);
				}
			}
		}
	}
	public function action_my()
	{
		if($this->_auth->logged_in('user'))
		{
			$this->template->content = View::factory('library-my-locations');
			$locations = $this->_get_locations();
			$this->template->content->set('locations', $locations);
			$this->response->body($this->template->content);
		}
	}
	public function action_edit()
	{
		$id = $this->request->param('id');
		if($this->_auth->logged_in('admin'))
		{
			$location = ORM::factory('Location',$id);
			$this->template->content = View::factory('library-edit-location');
			$this->template->content->set('location', $location);
			$this->response->body($this->template->content);
			if($this->request->post('save-location'))
			{
				try
				{
					$location->name = $this->request->post('location');
					$location->save();
				}
				catch(ORM_Validation_Exception $e)
				{
					$errors = $e->errors('models');
					print_r($errors);
				}
			}
		}
		else if($this->_auth->logged_in('user'))
		{
			$locations = $this->_get_locations();
			if(array_key_exists($id, $locations))
			{
				$location = ORM::factory('Location',$id);
				$this->template->content = View::factory('library-edit-location');
				$this->template->content->set('location', $location);
				$this->response->body($this->template->content);
				if($this->request->post('save-location'))
				{
					try
					{
						$location->name = $this->request->post('location');
						$location->save();
					}
					catch(ORM_Validation_Exception $e)
					{
						$errors = $e->errors('models');
						print_r($errors);
					}
				}
			}
			else 
			{
				$this->response->body('<h1>dupa!</h1>');	
			}
		}
		else 
		{
			
		}
	}
	public function action_remove()
	{
		if($this->_auth->logged_in('admin'))
		{
			try
			{
				$location = ORM::factory('Location',$this->request->param('id'));
				$location->delete();
				HTTP::redirect(Request::current()->param('language').'/location/my');
				$this->_set_success_status();
			}
			catch(ORM_Validation_Exception $e)
			{
				$errors = $e->errors('models');
				print_r($errors);
			}
		}
		else if($this->_auth->logged_in('user'))
		{
			$locations = $this->_get_locations();
			$id = $this->request->param('id');
			if(array_key_exists($id, $locations))
			{
				try
				{
					$location = ORM::factory('Location',$id);
					$location->delete();
					HTTP::redirect(Request::current()->param('language').'/location/my');
					$this->_set_success_status();
				}
				catch(ORM_Validation_Exception $e)
				{
					$errors = $e->errors('models');
					print_r($errors);
				}
			}
			else 
			{
				$this->response->body('<h1>dupa!</h1>');	
			}
		}
		else 
		{
			
		}
	}
}
