<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<base href="<?php echo URL::site(NULL, TRUE); ?>"
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://<?php echo $server;?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://<?php echo $server;?>/css/jumbotron.css">
		<link rel="stylesheet" href="http://<?php echo $server;?>/css/extra.css">
		<link rel="stylesheet" href="http://<?php echo $server;?>/css/jquery-ui.min.css">
		<link rel="stylesheet" href="http://<?php echo $server;?>/css/bootstrap-multiselect.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
           	 	  	 	<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
         	 		</button>
          			<a class="navbar-brand" href="#">Project name</a>
        		</div>
       			<div id="navbar" class="collapse navbar-collapse">
          			<ul class="nav navbar-nav">
            			<li class="active"><a href="#"><?php echo __('HOME');?></a></li>
            			<li class="dropdown">
             			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo __('LIBRARY');?><span class="caret"></span></a>
              				<ul class="dropdown-menu" role="menu">
              					<li class="dropdown-header"><?php echo __('FILMS');?></li>
                				<li><a href="<?php echo URL::site(Request::current()->param('language').'/films/add');?>"><?php echo __('ADD_FILM');?></a></li>
                				<li><a href="<?php echo URL::site(Request::current()->param('language').'/films/my/page/1');?>"><?php echo __('MY_FILMS');?></a></li>
                	            <li class="divider"></li>
                				<li class="dropdown-header"><?php echo __('MUSIC');?></li>
                				<li><a href="#"><?php echo __('MY_ALBUMS');?></a></li>
                				<li><a href="#"><?php echo __('MY_MUSIC');?></a></li>
                				<li><a href="#"><?php echo __('ADD_ALBUM');?></a></li>
               					<li><a href="#"><?php echo __('ADD_MUSIC');?></a></li> <!-- może rozbije -->
              				</ul>
            			</li>
            			<li class="dropdown">
            				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo __('SETTINGS');?><span class="caret"></span></a>
            				<ul class="dropdown-menu" role="menu">
              					<li class="dropdown-header"><?php echo __('LIBRARY_SETTINGS');?></li>
                				<li><a href="<?php echo URL::site(Request::current()->param('language').'/genres/add');?>"><?php echo __('ADD_FILM_GENRE');?></a></li>
                				<li><a href="<?php echo URL::site(Request::current()->param('language').'/carriers/add');?>"><?php echo __('ADD_FILM_CARRIER');?></a></li>
                  				<li><a href="<?php echo URL::site(Request::current()->param('language').'/location/add');?>"><?php echo __('ADD_FILM_LOCATION');?></a></li>
                  				<li><a href="<?php echo URL::site(Request::current()->param('language').'/location/my');?>"><?php echo __('MY_LOCATIONS');?></a></li>
                  				<li><a href="<?php echo URL::site(Request::current()->param('language').'/genres/list/page/1');?>"><?php echo __('GENRES');?></a></li>
                  				<li><a href="<?php echo URL::site(Request::current()->param('language').'/carriers/list');?>"><?php echo __('CARRIERS');?></a></li>
                  				<li class="divider"></li>
                				<li class="dropdown-header">Muzyka</li>
              				</ul>
            			</li>
            			<li><a href="#about"><?php echo __('ABOUT');?></a></li>
            			<li><a href="#contact"><?php echo __('CONTACT');?></a></li>
          			</ul>
          			<div class="pull-right">
          				<ul class="nav navbar-nav">
          				<?php
          					if(Auth::instance()->logged_in())
							{
						?>
							<li><a href="<?php echo URL::site(Request::current()->param('language').'/user/myprofile');?>"><?php echo __('MY_PROFILE');?></a></li>	
							<li><a href="<?php echo URL::site(Request::current()->param('language').'/user/logout');?>"><?php echo __('LOG_OUT');?></a></li>
   						<?php
							}
							else 
							{
						?>
            				<li><a href="<?php echo URL::site(Request::current()->param('language').'/user/login');?>"><?php echo __('LOGIN'); ?></a></li>
            				<li><a href="<?php echo URL::site(Request::current()->param('language').'/user/signup');?>"><?php echo __('SIGN_UP'); ?></a></li>
          				<?php
							};
						?>
        	  			</ul>
        	  		</div>
      		  	</div><!--/.nav-collapse -->
     	 	</div>
    	</nav>
		<?php
			if(isset($content)) echo $content;
		?>
		<footer>
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-11">
    					<p>&copy; Rafał Kowalski 2015</p>
    				</div>
    				<div class="col-sm-1">
    					<div class="form-group">
    						<form class="form-horizontal" action="<?php echo Request::detect_uri();?>" role="form" method="post">
    							<select claas="form-control" onchange="this.form.submit()" id="language" name="language">
    								<?php
    								foreach($langs as $key => $value)
									{
										if($key == Request::current()->param('language'))
										{
											echo '<option value="'.$key.'" selected="selected">'.$value.'</option>';
										}
										else 
										{
											echo '<option value="'.$key.'">'.$value.'</option>';
										}
									}
									?>	
    							</select>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    		<?php echo View::factory('profiler/stats'); ?>
    		<?php $test ;?>
   		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://<?php echo $server;?>/js/bootstrap.min.js"></script>
		<script src="http://<?php echo $server;?>/js/jquery-ui.min.js"></script>
		<script src="http://<?php echo $server;?>/js/bootstrap-multiselect.js"></script>
		<script src="http://<?php echo $server;?>/js/filmoteka.js"></script>
	</body>
</html>
