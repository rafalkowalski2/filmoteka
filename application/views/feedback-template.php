<?php
defined('SYSPATH') OR die('No direct access allowed.');
if(isset($error) AND $error == TRUE)
{
	if(is_array($error_message))
	{
		echo '<div class="alert alert-danger" role="alert">
     	      	<strong>'.__('Oops!').'</strong> '.__('Something went wrong!').'<br />
   				<span>'.__('Please check the following:').'</span>';
		foreach($error_message as $key => $value)
		{
			if(is_array($value))
			{
				foreach($value as $key2 => $value2)
				{
					echo '<li>'.$value2.'</li>';
				}
			}
			else 
			{
				echo '<li>'.$value.'</li>';	
			}
		}
		echo '</div>';
	}
	else 
	{
		echo '<div class="alert alert-danger" role="alert">
			  	<strong>'.__('Oops!').'</strong> '.__('Something went wrong!').'
    		  </div>';	
	}
}
//success
if(isset($success) AND $success == TRUE)
{
	if(is_array($success_message))
	{
		echo '<div class="alert alert-success"" role="alert">
     	      	<strong>'.__('Oops!').'</strong> '.__('Something went wrong!').'<br />
   				<span>'.__('Please check the following:').'</span>';
		foreach($success_message as $key => $value)
		{
			if(is_array($value))
			{
				foreach($value as $key2 => $value2)
				{
					echo '<li>'.$value2.'</li>';
				}
			}
			else 
			{
				echo '<li>'.$value.'</li>';	
			}
		}
		echo '</div>';
	}
	else 
	{
		echo '<div class="alert alert-success" role="alert">
			  	<strong>'.__('Great!').'</strong> '.__('Operation completed successfully!').'
    		  </div>';	
	}
}