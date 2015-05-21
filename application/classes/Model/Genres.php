<?php defined('SYSPATH') OR die('No direct access allowed.');
class Model_Genres extends ORM {

	//tabels
	protected $_table_name = 'genres';
	// Relationships
	protected $_has_many = array(
		'films' => array('model' => 'Film','through' => 'films_genres'),
		'users' => array('model' => 'User','through' => 'users_genres') 
	);

	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 3)),
				array('max_length', array(':value', 64)),
				array(array($this, 'unique'), array('name', ':value')),
			),
			'description' => array(
				array('not_empty'),
			)
		);
	}
	public function filters()
	{
		return array(
			'name' => array(
				array('trim'),
				array('strip_tags'),
			),
			'description' => array(
				array('trim'),
			),
		);	
	}
	public function user_has_already_add_genres_to_his_film($film_id, $user_id)
	{
		return (bool)DB::select(array(DB::expr('COUNT(*)'), 'total_count'))
		->from('films_genres')
		->join('films')
		->on('films.id', '=', 'films_genres.film_id')
		->where('films_genres.film_id', '=', $film_id)
		->execute()
		->get('total_count');
	}
	public function get_user_locations()
	{
		return $query = DB::select('locations.id', 'locations.name') 
				->from('locations')
				->join('users_locations')
				->on('locations.id', '=', 'users_locations.location_id')
				->join('users')
				->on ('users_locations.user_id', '=', 'users.id')
				->where('users.id', '=', Auth::instance()->get_user()->pk())
				->execute(); // coo? !
		/* DB::select()
				->from('locations', 'users_locations', 'users')
				->where('locations.id','=','users_locations.location_id')
				->and_where('users.id','=','users_locations.user_id')
				->and_where('users.id', '=', Auth::instance()->get_user()->pk())
				->execute();*/
	}
} // End Carrier model
