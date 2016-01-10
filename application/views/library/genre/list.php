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
					echo $pagination;
  				?>
				<table class="table table-hover">
   					<thead>
      					<tr>
        					<th><?php echo __('ID');?></th>
        					<th><?php echo __('Genre');?></th>
        					<th><?php echo __('Descitpion');?></th>
        					<th><?php echo __('Functions');?></th>
      					</tr>
    				</thead>
    				<tbody>
     					<?php
        					if(isset($genres) AND is_object($genres))
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
									foreach($genres as $value)
									{
										echo '<tr>
												<td>'.$i.'</td>
												<td>'.$value->name.'</td>
												<td>'.$value->description.'</td>
												<td class="col-md-2">
													<a href="'.URL::site(Request::current()->param('language').'/genres/edit/'.$value->id).'"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> '.__('Edit').'</a>
													<a href="'.URL::site(Request::current()->param('language').'/genres/remove/'.$value->id).'"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> '.__('Remowe').'</a>
												</td>
											  </tr>'."\n";
										$i++;
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