<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
	<div class="container">
		<div class="row">
  			<div class="col-sm-6 col-md-offset-3">
  				<p><h3><?php echo __('Add film genre');?></h3></p>
  				<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 					<div class="form-group">
    					<label class="control-label col-sm-3" for="genre"><?php echo __('Film genre:');?></label>
    					<div class="col-sm-9">
     						<input type="text" name="genre" class="form-control" id="genre" placeholder="<?php echo __('Enter film genre');?>" value="<?php echo Request::current()->post('genre');?>">
    			 		</div>
  					</div>
  					<div class="form-group">
    					<label class="control-label col-sm-3" for="description"><?php echo __('Description:'); ?></label>
    					<div class="col-sm-9"> 
     						 <textarea class="form-control" rows="5" name="description" id="description"></textarea>
    					</div>
  					</div>
  					<div class="form-group"> 
   						<div class="col-sm-offset-3 col-sm-9">
     					<input type="submit" name="add-film-genre" class="btn btn-default" value="<?php echo __('Add film genre');?>">
    				</div>
  				</form>
  			</div>
  		</div>
  	</div>
	</div>
</div>