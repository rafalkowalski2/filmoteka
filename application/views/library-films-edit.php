<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
  					<p><h3><?php echo __('Add film');?></h3></p>
  					<?php
  					echo View::factory('feedback-template')->bind('error', $error)
  															->bind('error_message', $error_message)
															->bind('success', $success)
															->bind('success_message', $success_message);
  					?>
  					<?php
  					if(is_array($film_detail))
					{
						$film_detail = $film_detail;
					}
					else 
					{
						$temp = $film_detail;
						//foreach($temp as )
					}
  					
						
					?>
				<div class="col-sm-6">
 					<div class="form-group">
    					<label class="control-label col-sm-3" for="film-name"><?php echo __('Title:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="film-name" class="form-control" id="film-name" placeholder="<?php echo __('Enter film title');?>" value="<?php echo $film_detail['f_name'];?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="filmweb"><?php echo __('FILMWEB:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="filmweb" class="form-control" id="filmweb" readonly value="<?php echo $film_detail['f_filmweb'];?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="genres"><?php echo __('Genres:');?></label>
    					<div class="col-sm-9">
    						<select name="genres[]" class="form-control" id="genres" multiple="multiple">
    							<?php
    								if(isset($genres) AND is_array($genres))
									{
										
										$i= 0;
										foreach($genres as $key => $values)
										{
											//foreach($film_detail['gen_id'] as $id)
											//{
												if(is_array($film_detail['gen_id']) AND in_array($key, $film_detail['gen_id']))
												{
													echo '<option value="'.$key.'" selected>'.$values.'</option>'."\n";
												}
												else if($key == $film_detail['gen_id'])
												{
													echo '<option value="'.$key.'" selected>'.$values.'</option>'."\n";
												}
												else 
												{
													echo '<option value="'.$key.'">'.$values.'</option>'."\n";
												}
											//}
											$i++;
										}
									}
    							?>
    						</select>
     				 	</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="releasedate"><?php echo __('Release date:');?></label>
    					<div class="col-sm-9">
     						<input type="date" name="releasedate" class="form-control" id="releasedate" placeholder="<?php echo __('Enter release date');?>" value="<?php echo $film_detail['f_releasedate'];?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="fw_grade"><?php echo __('Filmweb grade:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="fw_grade" class="form-control" id="fw_grade" placeholder="<?php echo __('Enter filmweb grade');?>" value="<?php echo $film_detail['f_fw_grade'];?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="my_grade"><?php echo __('My grade:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="my_grade" class="form-control" id="my_grade" placeholder="<?php echo __('Enter my grade');?>" value="<?php echo Request::current()->post('my_grade');?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="carrier"><?php echo __('Carrier:');?></label>
    					<div class="col-sm-9">
    						<select name="carrier" class="form-control" id="carrier">
    							<?php
    								if(isset($carries) AND is_array($carries))
									{
										foreach($carries as $key => $values)
										{
											if($key == $film_detail['c_id'])
											{
												echo '<option value="'.$key.'" selected>'.$values.'</option>'."\n";
											}
											else 
											{
												echo '<option value="'.$key.'">'.$values.'</option>'."\n";	
											}
										}
									}
    							?>
    						</select>
     				 	</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="location"><?php echo __('Location:');?></label>
    					<div class="col-sm-9">
     						<select name="location" class="form-control" id="location">
    							<?php
    								if(isset($locations) AND is_array($locations))
									{
										foreach($locations as $key => $values)
										{
											if($key == $film_detail['l_id'])
											{
												echo '<option value="'.$key.'" selected>'.$values.'</option>'."\n";
											}
											else 
											{
												echo '<option value="'.$key.'">'.$values.'</option>'."\n";
											}
										}
									}
    							?>
    						</select>	
     					</div>
  					</div>
  				</div>
  				<div class="col-sm-6">
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="description"><?php echo __('Description:'); ?></label>
    					<div class="col-sm-9"> 
     						 <textarea class="form-control" rows="5" name="description" id="description"><?php echo $film_detail['f_description'];?></textarea>
    					</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="resolution"><?php echo __('Resolution:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="resolution" class="form-control" id="resolution" placeholder="<?php echo __('Enter resolution');?>" value="<?php echo $film_detail['d_resolution'];?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="resolution"><?php echo __('Filesize:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="filesize" class="form-control" id="filesize" placeholder="<?php echo __('Enter filesize');?>" value="<?php echo $film_detail['d_filesize'];?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="resolution"><?php echo __('Duration:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="duration" class="form-control" id="duration" placeholder="<?php echo __('Enter duration');?>" value="<?php echo $film_detail['d_duration'];?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="film-language"><?php echo __('Language:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="film-language" class="form-control" id="film-language" placeholder="<?php echo __('Enter language');?>" value="<?php echo $film_detail['d_language']?>">
    			 		</div>
  					</div>
  				</div>
  				<input type="hidden" name="d_id" value="<?php echo $film_detail['d_id'];?>">
  				<div class="col-sm-offset-10 col-sm-1">
  					<div class="form-group"> 
   						<div class="col-sm-offset-3 col-sm-9">
     						<input type="submit" name="update-film" class="btn btn-default" value="<?php echo __('SAVE');?>">
     					</div>
    				</div>
    			</div>
  			</form>
  		</div>
  	</div>
	</div>
</div>