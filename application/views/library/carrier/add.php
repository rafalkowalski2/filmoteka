<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
  			<div class="col-sm-6 col-md-offset-3">
  				<p><h3><?php echo __('Add carrier');?></h3></p>
  				<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 					<div class="form-group">
    					<label class="control-label col-sm-3" for="genre"><?php echo __('Carrier:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="name" class="form-control" id="name" placeholder="<?php echo __('Enter carrier');?>" value="<?php echo Request::current()->post('name');?>">
    			 		</div>
  					</div>
  					<div class="form-group"> 
   						<div class="col-sm-offset-3 col-sm-9">
     					<input type="submit" name="add-carrier" class="btn btn-default" value="<?php echo __('Add carrier');?>">
    				</div>
  				</form>
  			</div>
  		</div>
  	</div>
	</div>
</div>