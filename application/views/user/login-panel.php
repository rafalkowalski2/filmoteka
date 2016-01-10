<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="jumbotron">
     	<div class="container">
     		<div class="row">
  				<div class="col-sm-6 col-md-offset-3">
  					<p><h3><?php echo __('Login panel');?></h3></p>
  					<?php
  						if(isset($error) AND $error == TRUE)
						{
							echo '<div class="alert alert-danger" role="alert">
   								 <strong>'.__('Oops!').'</strong> '.__('You are entered a wrong email or wrong password!').'
									</div>';
						}
  					?>
  					<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 						<div class="form-group">
    						<label class="control-label col-sm-2" for="email"><?php echo __('Email:');?></label>
    						<div class="col-sm-10">
     							<input type="email" name="email" class="form-control" id="email" placeholder="<?php echo __('Enter email');?>" value="<?php echo Request::current()->post('email');?>">
    			 			</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-2" for="pwd"><?php echo __('Password:'); ?></label>
    						<div class="col-sm-10"> 
     							 <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo __('Enter password');?>">
    						</div>
  						</div>
  						<div class="form-group"> 
    						<div class="col-sm-offset-2 col-sm-10">
     					 		<div class="checkbox">
        							<label><input type="checkbox" name="rememberme"> <?php echo __('Remember me');?></label>
      							</div>
    						</div>
 						</div>
 						<div class="form-group"> 
   					 		<div class="col-sm-offset-2 col-sm-10">
     						<input type="submit" name="login" class="btn btn-default" value="<?php echo __('Login');?>"></button>
    					</div>
  						</div>
					</form>
				</div>
			</div>
      	</div>
    </div>