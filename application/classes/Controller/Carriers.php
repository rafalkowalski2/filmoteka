<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Carriers extends Controller_PageTemplate
{
	public function action_add()
	{
		if($this->_auth->logged_in('admin'))
		{
			$this->template->content = View::factory('library-add-carrier');
			if($this->request->post('add-carrier'))
			{
				try
				{
					$carrier = ORM::factory('Carrier');
					$carrier->name = $this->request->post('name');
					$carrier->save();
				}
				catch(ORM_Validation_Exception $e)
				{
					$errors = $e->errors('models');
					print_r($errors);
				}
			}
		}
	}
	public function action_list()
	{
		if($this->_auth->logged_in('admin'))
		{
			$this->template->content = View::factory('library-carries-list');
			$locations = $this->_get_carries();
			$this->template->content->set('carries', $locations);
			$this->response->body($this->template->content);
		}
	}
	public function action_edit()
	{
		$id = $this->request->param('id');
		if($this->_auth->logged_in('admin'))
		{
			$carrier = ORM::factory('Carrier',$id);
			$this->template->content = View::factory('library-carries-edit');
			$this->template->content->set('carrier', $carrier);
			$this->response->body($this->template->content);
			if($this->request->post('save-carrier'))
			{
				try
				{
					$carrier->name = $this->request->post('carrier');
					$carrier->save();
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
	public function action_remove()
	{
		if($this->_auth->logged_in('admin'))
		{
			try
			{
				$carrier = ORM::factory('Carrier',$this->request->param('id'));
				$carrier->delete();
				HTTP::redirect(Request::current()->param('language').'/carriers/list');
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
