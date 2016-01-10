<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
  			<div class="col-sm-6 col-md-offset-3">
  				<p><h3><?php echo __('Add film genre');?></h3></p>
  				<?php
  					echo View::factory('feedback-template')->bind('error', $error)
  															->bind('error_message', $error_message)
															->bind('success', $success)
															->bind('success_message', $success_message);
  				?>
  				<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 					<div class="form-group">
    					<label class="control-label col-sm-3" for="genre"><?php echo __('Film genre:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="genre" class="form-control" id="genre" placeholder="<?php echo __('Enter film genre');?>" value="<?php echo $genre->name;?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="description"><?php echo __('Description:'); ?></label>
    					<div class="col-sm-9"> 
     						 <textarea class="form-control" rows="5" name="description" id="description"><?php echo $genre->description;?></textarea>
    					</div>
  					</div>
  					<div class="form-group"> 
   						<div class="col-sm-offset-3 col-sm-9">
     					<input type="submit" name="save-film-genre" class="btn btn-default" value="<?php echo __('Save');?>">
     					<input type="submit" name="save-film-genre-and-redirect" class="btn btn-default" value="<?php echo __('SAVE_AND_REDIRECT_TO_LIST');?>">
    				</div>
  				</form>
  			</div>
  		</div>
  	</div>
	</div>
</div>