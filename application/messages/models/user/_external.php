<?php
return array(
	'password' => array(
		'not_empty' => __('Field :field must not be empty'),
		'min_length' => __('Password must be least :param2 characters long'),
	),
    'password_confirm' => array(
        'matches' => _('Passwords do not match'),
    ),
);