<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Genres extends Controller_PageTemplate
{
	public function action_add()
	{
		if($this->_auth->logged_in('admin'))
		{
			$this->template->content = View::factory('library/genre/add');
			if($this->request->post('add-film-genre'))
			{
				try
				{
					$genre = ORM::factory('Genres');
					$genre->name = $this->request->post('genre');
					$genre->description = $this->request->post('description');
					$genre->save();
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
			$genres		= ORM::factory('Genres');
			$total 		= $genres->count_all();
			$pagination = Pagination::factory(array('total_items' => $total));
			$results	= $genres->order_by('name','asc')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
			$this->template->content = View::factory('library/genre/list');
			$this->template->content->set('genres', $results)->set('pagination', $pagination);
			$this->response->body($this->template->content);
		}
		else 
		{
			//zbyt niskie uprawnienia
		}
	}
	public function action_edit()
	{
		$id = $this->request->param('id');
		if($this->_auth->logged_in('admin'))
		{
			$genre = ORM::factory('Genres',$id);
			$this->template->content = View::factory('library/genre/edit');
			$this->template->content->set('genre', $genre);
			$this->response->body($this->template->content);
			if($this->request->post('save-film-genre'))
			{
				try
				{
					$genre->name		= $this->request->post('genre');
					$genre->description = $this->request->post('description');
					$genre->save();
					$this->_set_success_status();
				}
				catch(ORM_Validation_Exception $e)
				{
					$errors = $e->errors('models');
					$this->_set_error_status();
					$this->_set_error_message($errors);
				}
			}
			else if($this->request->post('save-film-genre-and-redirect'))
			{
				try
				{
					$genre->name		= $this->request->post('genre');
					$genre->description = $this->request->post('description');
					$genre->save();
					HTTP::redirect(Request::current()->param('language').'/genres/list');
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
				$genre = ORM::factory('Genres',$this->request->param('id'));
				$genre->delete();
				HTTP::redirect(Request::current()->param('language').'/genres/list');
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