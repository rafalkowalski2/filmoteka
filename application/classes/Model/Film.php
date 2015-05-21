<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Default auth user
 *
 * @package    Kohana/Auth
 * @author     Kohana Team
 * @copyright  (c) 2007-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
 class Model_Film extends ORM
 {
 	protected $_table_name = 'films';
	protected $_has_many = array(
		'genres'			=> array('model' => 'Genres','through' => 'films_genres'),
		'locations'			=> array('model' => 'Location', 'through' => 'films_locations'),
		'carries'			=> array('model' => 'Carrier', 'through' => 'films_carries'),
		'grades'			=> array('model' => 'Grades', 'through' => 'films_grades'),
		'user_film_details'	=> array('model' => 'FilmDetails', 'through' => 'films_users_films_details'),
		'users'				=> array('model' => 'User', 'through' => 'films_users'),
 	);	
	public function rules()
	{
		return array(
			'name' => array(
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 254)),
				array(array($this, 'unique'), array('name', ':value')),
			),
			'releasedate' => array(
				array('not_empty'),
			),
			'description' => array(
				array('not_empty')
			),
			'fw_grade' => array(
				array('not_empty'),
			
			),
			'filmweb' => array(
				array('not_empty'),
			
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
			'description' => array(
				array('trim'),
				array('strip_tags'),
			),
		);	
	}
	public function unique_key_exists($value, $field = NULL)
	{
		if ($field === NULL)
		{
			// Automatically determine field by looking at the value
			$field = $this->unique_key($value);
		}

		return (bool) DB::select(array(DB::expr('COUNT(*)'), 'total_count'))
			->from($this->_table_name)
			->where($field, '=', $value)
			->where($this->_primary_key, '!=', $this->pk())
			->execute($this->_db)
			->get('total_count');
	}
	public function user_already_has_film($film_name, $user_id)
	{
		return (bool)DB::select(array(DB::expr('COUNT(*)'), 'total_count'))
		->from('films_users')
		->join('films')
		->on('films.id', '=', 'films_users.film_id')
		->where('films.name', '=', $film_name)
		->and_where('films_users.user_id','=', $user_id)
		->execute()
		->get('total_count');
	}
	public function list_film_name()
	{
		return DB::select('name')
		->from($this->_table_name)
		->execute()
		->as_array();
	}
	public function get_id($film_name)
	{
		return DB::select('id')
		->from($this->_table_name)
		->where('name', '=', trim($film_name))
		->execute()
		->get('id');
	}
	public function get_film($user_id, $film_id)
	{
		return DB::select(
			array('films.id', 'f_id'),
			array('films.name','f_name'),
			array('films.releasedate', 'f_releasedate'),
			array('films.description', 'f_description'),
			array('films.fw_grade','f_fw_grade'),
			array('films.filmweb', 'f_filmweb'),
			array('carries.id', 'c_id'),
			array('carries.name', 'c_name'), 
			array('genres.id', 'gen_id'),
			array('genres.name', 'gen_name'),
			array('locations.id', 'l_id'),
			array('locations.name', 'l_name'),
			array('user_film_details.id', 'd_id'),
			array('user_film_details.filesize', 'd_filesize'),
			array('user_film_details.resolution', 'd_resolution'),
			array('user_film_details.duration', 'd_duration'),
			array('user_film_details.language', 'd_language')
		)
		->from($this->_table_name)
		->join('films_users')
		->on('films_users.film_id', '=', 'films.id')
		->join('users')
		->on('users.id', '=', 'films_users.user_id')
		->join('films_genres')
		->on('films_genres.film_id', '=', 'films.id')
		->join('genres')
		->on('genres.id', '=', 'films_genres.genres_id')
		->join('films_locations')
		->on('films_locations.film_id', '=', 'films.id')
		->join('locations')
		->on('locations.id', '=', 'films_locations.location_id')
		->join('films_users_films_details')
		->on('films_users_films_details.film_id','=', 'films.id')
		->join('user_film_details')
		->on('user_film_details.id', '=', 'films_users_films_details.details_id')
		->join('films_carries')
		->on('films_carries.film_id', '=', 'films.id')
		->join('carries')
		->on('carries.id', '=', 'films_carries.carrier_id')
		->where('users.id', '=', $user_id)
		->and_where('films.id', '=', $film_id)
		->execute();
	}
	public function get_number_of_films($user_id)
	{
		return DB::select(array(DB::expr('COUNT(*)'), 'total_count'))
		->from($this->_table_name)
		->join('films_users')
		->on('films_users.film_id', '=', 'films.id')
		->join('users')
		->on('users.id', '=', 'films_users.user_id')
		->join('films_locations')
		->on('films_locations.film_id', '=', 'films.id')
		->join('locations')
		->on('locations.id', '=', 'films_locations.location_id')
		->join('films_users_films_details')
		->on('films_users_films_details.film_id','=', 'films.id')
		->join('user_film_details')
		->on('user_film_details.id', '=', 'films_users_films_details.details_id')
		//->group_by('films.id')
		->where('users.id', '=', $user_id)
		//->group_by('count')
		->execute()
		->get('total_count');
	}
	public function get_user_films($user_id, $_offset, $_limit)
	{
		return DB::select(
			array('films.id', 'f_id'),
			array('films.name','f_name'),
			array('genres.name', 'g_name'),
			array('locations.name', 'l_name'),
			array('user_film_details.resolution', 'd_resolution')
		)
		->from($this->_table_name)
		->join('films_users')
		->on('films_users.film_id', '=', 'films.id')
		->join('users')
		->on('users.id', '=', 'films_users.user_id')
		->join('films_genres')
		->on('films_genres.film_id', '=', 'films.id')
		->join('genres')
		->on('genres.id', '=', 'films_genres.genres_id')
		->join('films_locations')
		->on('films_locations.film_id', '=', 'films.id')
		->join('locations')
		->on('locations.id', '=', 'films_locations.location_id')
		->join('films_users_films_details')
		->on('films_users_films_details.film_id','=', 'films.id')
		->join('user_film_details')
		->on('user_film_details.id', '=', 'films_users_films_details.details_id')
		->group_by('films.id')
		->order_by('films.name', 'asc')
		->where('users.id', '=', $user_id)
		->limit($_limit)
		->offset($_offset)
		->execute();
	}
 }
