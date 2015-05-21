<?php defined('SYSPATH') OR die('No direct access allowed.');
class Model_Location extends ORM {

	//tabels
	protected $_table_name = 'locations';
	// Relationships
	protected $_has_many = array(
		'films' => array('model' => 'Film','through' => 'films_locations'),
		'users' => array('model' => 'User','through' => 'users_locations'),
	);

	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 3)),
				array('max_length', array(':value', 64)),
			),
		);
	}
	public function filters()
	{
		return array(
			'name' => array(
				array('trim'),
				array('strip_tags'),
			),
		);	
	}
	public function user_has_already_add_location_to_his_film($film_id)
	{
		return (bool)DB::select(array(DB::expr('COUNT(*)'), 'total_count'))
		->from('films_locations')
		->join('films')
		->on('films.id', '=', 'films_locations.film_id')
		->where('films_locations.film_id', '=', $film_id)
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
				->execute();
	}
} // End Carrier model
