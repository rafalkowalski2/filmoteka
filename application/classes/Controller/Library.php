<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Library extends Controller_PageTemplate
{
	public $_film_id;
	public function action_add_film()
	{
		if($this->_auth->logged_in('user'))
		{		
			$this->template->content = View::factory('library-add-film');
			// pobieranie gatunków, nośników itp 	
			(array)$genres		= $this->_get_genres();
			(array)$carries		= $this->_get_carries();
			(array)$locations	= $this->_get_locations();
			$this->_get_locations();
			//wysyłanie zmienny do widoku
			$this->template->content->set('genres', $genres);
			$this->template->content->set('carries', $carries);
			$this->template->content->set('locations', $locations);
			$this->response->body($this->template->content);
			(array)$er = array();
			if($this->request->post('add-film'))
			{
				$location = ORM::factory('Location');
				$location->where('name', '=', $this->request->post('location'))->find();
				try
				{
					$film = ORM::factory('Film');
					if($film->unique_key_exists($this->request->post('film-name'), 'name'))
					{
						echo 'film jest już w bazie';
						$film->where('name' ,'=', trim($this->request->post('film-name')));
						$film->find();
						$this->_film_id= $film->id;
						if($film->user_already_has_film($this->request->post('film-name'), $this->_user_id))
						{
							echo '<br />user ma już film ';
							if(TRUE)
							{
								//film ma już lokoacje 	
							}
							else 
							{
								
							}
						}
						else 
						{
						
							$film->where('name' ,'=', trim($this->request->post('film-name')));
							$film->find();
							$film->save();
							$this->_film_id= $film->id;
							$user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
							$film->add('users', $user);
						}
					}
					else 
					{
						$film->name = $this->request->post('film-name');
						$film->releasedate = $this->request->post('releasedate');
						$film->description = $this->request->post('description');
						$film->fw_grade = $this->request->post('fw_grade');
						$film->imbd_grade = $this->request->post('imbd_grade');	
						$film->save();
						$this->_film_id= $film->id;
						$user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
						$film->add('users', $user);
				
					}
				}
				catch(ORM_Validation_Exception $e)
				{
					$er =  array_merge($er, $e->errors('models') );
					$this->_set_error_status();
				}
				try
				{
					$details = ORM::factory('Details');
					if($details->user_has_already_add_details_to_film($this->_user_id))
					{
						echo '<br /> user dodaał już details';	
					}
					else 
					{
						$details->resolution = $this->request->post('resolution');
						$details->filesize	 = $this->request->post('filesize');
						$details->duration	 = $this->request->post('duration');
						$details->language	 = $this->request->post('film-language');
						$details->save();
						$film_1 = ORM::factory('Film')->where('id','=',$this->_film_id)->find();
						$details->add('films', $film_1);
						$user = ORM::factory('User')->where('id', '=', $this->_auth->get_user()->pk())->find();
						$details->add('users', $user);
					}
				}
				catch(ORM_Validation_Exception $e)
				{
					$er =  array_merge($er, $e->errors('models') );
					$this->_set_error_status();
				}
				$this->_set_error_message($er);
				print_r($er);
			}
		}
		else
		{
			//trzeba się zalogować
		}
	}
}