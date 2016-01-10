<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
  			<div class="col-sm-6 col-md-offset-3">
  				<p><h3><?php echo __('Edit carrier');?></h3></p>
  				<?php
  					echo View::factory('feedback-template')->bind('error', $error)
  															->bind('error_message', $error_message)
															->bind('success', $success)
															->bind('success_message', $success_message);
  				?>
  				<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 					<div class="form-group">
    					<label class="control-label col-sm-3" for="carrier"><?php echo __('Carrier:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="carrier" class="form-control" id="carrier" placeholder="<?php echo __('Enter carrier');?>" value="<?php echo $carrier->name;?>">
     						<input type="hidden" name="id" value="<?php echo $carrier->id;?>">
    			 		</div>
  					</div>
  					<div class="form-group"> 
   						<div class="col-sm-offset-3 col-sm-9">
     					<input type="submit" name="save-carrier" class="btn btn-default" value="<?php echo __('Save');?>">
     					<input type="submit" name="save-carrier-and-redirect" class="btn btn-default" value="<?php echo __('SAVE_AND_REDIRECT_TO_LIST');?>">
    				</div>
  				</form>
  			</div>
  		</div>
  	</div>
	</div>
</div>