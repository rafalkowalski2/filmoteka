<?php defined('SYSPATH') OR die('No direct access allowed.');
class Model_Details extends ORM {

	//tabels
	protected $_table_name = 'user_film_details';
	// Relationships
	protected $_has_many = array(
		'films' => array('model' => 'Film', 'through' => 'films_users_films_details'),
		'users' => array('model' => 'User', 'through' => 'users_users_films_details')
	);

	public function rules()
	{
		return array(
			'filesize' => array(
				array('not_empty'),
				array('max_length', array(':value', 32)),
			),
			'resolution' => array(
				array('not_empty'),
				array('max_length', array(':value', 64)),
			),
			'duration' => array(
				array('not_empty'),
				array('max_length', array(':value', 64)),
			),
			'language' => array(
				array('not_empty'),
				array('max_length', array(':value', 32)),
			)
		);
	}
	public function filters()
	{
		return array(
			'filesize' => array(
				array('trim'),
				array('strip_tags'),
			),
			'resolution' => array(
				array('trim'),
				array('strip_tags'),
			),
			'duration' => array(
				array('trim'),
				array('strip_tags'),
			),
			'language' => array(
				array('trim'),
				array('strip_tags'),
			),
		);	
	}
	public function user_has_already_add_details_to_film($film_id, $user_id)
	{
		return (bool) DB::select(array(DB::expr('COUNT(*)'), 'total_count'))
			->from('users_users_films_details')
			->join('users')
			->on('users.id', '=', 'users_users_films_details.user_id')
			->join('user_film_details')
			->on('user_film_details.id', '=', 'users_users_films_details.details_id')
			->join('films_users_films_details')
			->on('films_users_films_details.details_id', '=', 'user_film_details.id')
			->where('users.id','=', $user_id)
			->and_where('films_users_films_details.film_id', '=', $film_id)
			->execute()
			->get('total_count');
	}
}