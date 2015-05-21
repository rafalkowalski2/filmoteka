<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3><?php echo __('MY_FILMS');?></h3>
				<?php
  					echo View::factory('feedback-template')->bind('error', $error)
  															->bind('error_message', $error_message)
															->bind('success', $success)
															->bind('success_message', $success_message);
  				?>
  				<?php echo $pagination; ?>
				<table class="table table-hover">
   					<thead>
      					<tr>
        					<th><?php echo __('ID');?></th>
        					<th><?php echo __('NAME');?></th>
        					<th><?php echo __('RESOLUTION');?></th>
        					<th><?php echo __('LOCATION');?></th>
        					<th><?php echo __('Functions');?></th>
      					</tr>
    				</thead>
    				<tbody>
    					<!--warunek dla deatila jest walniety i prawie zawsze zwraca TRUE, trezeba go naprawić 
    					SELECT * FROM `films` JOIN `films_users` ON `films_users`.`film_id` = `films`.`id` JOIN `users` ON `users`.`id` = `films_users`.`user_id` JOIN `films_genres` ON `films_genres`.`film_id` = `films`.`id` JOIN `genres` ON `genres`.`id` = `films_genres`.`genres_id` WHERE `users`.`id` = 2
     				-->
     					<?php
     					
        					if(isset($user_films) AND is_object($user_films))
								{
									$config = Kohana::$config->load('pagination');
									$per_page = $config['default']['items_per_page'];
									if(Request::current()->param('page') !=1)
									{
										$page = (int)Request::current()->param('page');
										(int)$i = ($per_page*$page)-$per_page+1;
									}
									else 
									{
										(int)$i = 1;
									}
									foreach($user_films as $key => $value)
									{
										//print_r($value);
										//echo $value['f_name'];
										//foreach($value as $val)
										//{
											echo '<tr style="padding:10px;">
													<td>'.$i.'</td>
													<td>'.$value['f_name'].'</td>
													<td class="col-md-2">'.$value['d_resolution'].'</td>
													<td>'.$value['l_name'].'</td>
													<td class="col-md-2">
														<a href="'.URL::site(Request::current()->param('language').'/films/edit/').'/'.$value['f_id'].'"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> '.__('Edit').'</a>
														<a href="'.URL::site(Request::current()->param('language').'/films/remove/').'/'.$value['f_id'].'"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> '.__('Remowe').'</a>
													</td>
											 	 </tr>'."\n";
											$i++; 
										//}
									}
								}
        					?>
    				</tbody>
  				</table>
  				<?php echo $pagination;?>
			</div>
		</div>
	</div>
</div>