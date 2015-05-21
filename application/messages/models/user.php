<?php
return array(
    'username' => array
    (
        'not_empty' => __('Field :field must not be empty'),
        'min_length' => __('Username must be least :param2 characters long'),
    ),
    'email' => array
    (
		'not_empty' => __('Field :field must not be empty'),
		'unique' => __('Email :value is already in our database'),
	),
	'password' => array 
	(
		'not_empty' => __('Field :field must not be empty'),
	) 
);