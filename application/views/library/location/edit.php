<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
  			<div class="col-sm-6 col-md-offset-3">
  				<p><h3><?php echo __('Edit location');?></h3></p>
  				<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 					<div class="form-group">
    					<label class="control-label col-sm-3" for="name"><?php echo __('Location:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="location" class="form-control" id="location" placeholder="<?php echo __('Enter carrier');?>" value="<?php echo $location->name;?>">
     						<input type="hidden" name="id" value="<?php echo $location->id;?>">
    			 		</div>
  					</div>
  					<div class="form-group"> 
   						<div class="col-sm-offset-3 col-sm-9">
     					<input type="submit" name="save-location" class="btn btn-default" value="<?php echo __('Save');?>">
     					<input type="submit" name="save-location-and-redirect" class="btn btn-default" value="<?php echo __('SAVE_AND_REDIRECT_TO_LIST');?>">
    				</div>
  				</form>
  			</div>
  		</div>
  	</div>
	</div>
</div>