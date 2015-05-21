<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3><?php echo __('My locations');?></h3>
				<?php
  					echo View::factory('feedback-template')->bind('error', $error)
  															->bind('error_message', $error_message)
															->bind('success', $success)
															->bind('success_message', $success_message);
  				?>
				<table class="table table-hover">
   					<thead>
      					<tr>
        					<th><?php echo __('ID');?></th>
        					<th><?php echo __('Location');?></th>
        					<th><?php echo __('Functions');?></th>
      					</tr>
    				</thead>
    				<tbody>
     					<?php
        					if(isset($carries) AND is_array($carries))
								{
									(int)$i = 1;
									foreach($carries as $key => $value)
									{
										echo '<tr class="'.$key.'">
												<td>'.$i.'</td>
												<td>'.$value.'</td>
												<td class="col-md-2">
													<a href="'.URL::site(Request::current()->param('language').'/carriers/edit/'.$key).'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> '.__('Edit').'</a>
													<a href="'.URL::site(Request::current()->param('language').'/carriers/remove/'.$key).'" class="locations-list" data-id="'.$key.'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> '.__('Remowe').'</a>
												</td>
											  </tr>'."\n";
										$i++;
									}
								}
        					?>
    				</tbody>
  				</table>
			</div>
		</div>
	</div>
</div>