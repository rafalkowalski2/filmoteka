<ul class="nav nav-tabs">
  	<li <?php if(strpos($_SERVER['REQUEST_URI'], 'myprofile'))  echo 'class="active"';?>><a href="<?php echo URL::site(Request::current()->param('language').'/user/myprofile');?>"><?php echo __('My profile');?></a></li>
  	<li <?php if(strpos($_SERVER['REQUEST_URI'], 'edit'))  echo 'class="active"';?>><a href="<?php echo URL::site(Request::current()->param('language').'/user/edit');?>"><?php echo __('Edit');?></a></li>
  	<li <?php if(strpos($_SERVER['REQUEST_URI'], 'changepassword'))  echo 'class="active"';?>><a href="<?php echo URL::site(Request::current()->param('language').'/user/changepassword');?>"><?php echo __('Change password');?></a></li>
</ul>