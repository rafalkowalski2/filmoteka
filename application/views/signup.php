<?php defined('SYSPATH') OR die('No direct access allowed.');?>
<div class="jumbotron">
     	<div class="container">
     		<div class="row">
  				<div class="col-sm-6 col-md-offset-3">
  					<p><h3>Zarejestruj się !</h3></p>
  					<?php
  						if(isset($error) AND $error == TRUE)
						{
							echo '
								<div class="alert alert-danger" role="alert">
   									<strong>'.__('Oops!').'</strong> '.__('Something went wrong!').'<br />
   								 	<span>'.__('Please check the following:').'</span>';
							if(is_array($error_message))
							{
								echo '<ul claas="list-group">';
								foreach( $error_message as $key => $value )
								{
									if(is_array($value))
									{
										foreach($value as $key2 => $value2)
										{
											echo '<li>'.$value2.'</li>';
										}
									}
									else 
									{
										echo '<li>'.$value.'</li>';	
									}
								}
								echo '</ul>';
							}
							echo '</div>';
						}
  					?>
  					<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
 						<div class="form-group">
    						<label class="control-label col-sm-3" for="email"><?php echo __('Username:'); ?></label>
    						<div class="col-sm-9">
     							<input type="text" name="username" class="form-control" id="username" placeholder="<?php echo __('Enter username');?>" value="<?php echo Request::current()->post('username');?>"> 
    			 			</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-3" for="email"><?php echo __('Usersurname:'); ?></label>
    						<div class="col-sm-9">
     							<input type="text" name="usersurname" class="form-control" id="usersurname" placeholder="<?php echo __('Enter usersurname');?>" value="<?php echo Request::current()->post('usersurname');?>">
    			 			</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-3" for="email"><?php echo __('Email:'); ?></label>
    						<div class="col-sm-9">
     							<input type="email" name="email" class="form-control" id="email" placeholder="<?php echo __('Enter email');?>" value="<?php echo Request::current()->post('email');?>">
    			 			</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-3" for="pwd"><?php echo __('Password:'); ?></label>
    						<div class="col-sm-9"> 
     							 <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo __('Enter password');?>">
    						</div>
  						</div>
  						<div class="form-group">
    						<label class="control-label col-sm-3" for="pwd"><?php echo __('Repeat password:'); ?></label>
    						<div class="col-sm-9"> 
     							 <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="<?php echo __('Enter repeat password');?>">
    						</div>
  						</div>
 						<div class="form-group"> 
   					 		<div class="col-sm-offset-3 col-sm-9">
     						<input type="submit" name="signup" class="btn btn-default" value="<?php echo __('Sign up');?>">
    					</div>
  						</div>
					</form>
				</div>
			</div>
      	</div>
    </div>