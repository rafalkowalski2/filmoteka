<?php defined('SYSPATH') OR die('No direct access allowed.');
class Model_Carrier extends ORM {

	//tabels
	protected $_table_name = 'carries';
	// Relationships
	protected $_has_many = array(
		'films' => array('model' => 'Film','through' => 'films_carries'),
		'users' => array('model' => 'User','through' => 'users_carries'),
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
	public function user_has_already_add_carrier_to_his_film($film_id)
	{
		return (bool)DB::select(array(DB::expr('COUNT(*)'), 'total_count'))
		->from('films_carries')
		->join('films')
		->on('films.id', '=', 'films_carries.film_id')
		->where('films_carries.film_id', '=', $film_id)
		->execute()
		->get('total_count');
	}
} // End Carrier model
