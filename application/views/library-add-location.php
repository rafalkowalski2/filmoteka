<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
  			<div class="col-sm-6 col-md-offset-3">
  				<p><h3><?php echo __('Add location');?></h3></p>
  				<?php
  					echo View::factory('feedback-template')->bind('error', $error)
  															->bind('error_message', $error_message)
															->bind('success', $success)
															->bind('success_message', $success_message);
  				?>
  				<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 					<div class="form-group">
    					<label class="control-label col-sm-3" for="name"><?php echo __('Location:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="location" class="form-control" id="location" placeholder="<?php echo __('Enter carrier');?>" value="<?php echo Request::current()->post('name');?>">
    			 		</div>
  					</div>
  					<div class="form-group"> 
   						<div class="col-sm-offset-3 col-sm-9">
     					<input type="submit" name="add-location" class="btn btn-default" value="<?php echo __('Add location');?>">
    				</div>
  				</form>
  			</div>
  		</div>
  	</div>
	</div>
</div>