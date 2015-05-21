<?php defined('SYSPATH') or die('No direct script access.');?>
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
            		<li class="active"><a href="#">Home</a></li>
            		<li class="dropdown">
             		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bibioteka<span class="caret"></span></a>
              			<ul class="dropdown-menu" role="menu">
              				<li class="dropdown-header">Filmy</li>
                			<li><a href="myfilms.html">Moje filmy</a></li>
                			<li><a href="#">Dodaj film</a></li>
                			<li class="divider"></li>
                			<li class="dropdown-header">Muzyka</li>
                			<li><a href="#">Moje albumy</a></li>
                			<li><a href="#">Moje muzyka</a></li>
                			<li><a href="#">Dodaj album</a></li>
               				<li><a href="#">Dodaj muzyke</a></li> <!-- może rozbije -->
              			</ul>
            		</li>
            		<li><a href="#about">About</a></li>
            		<li><a href="#contact">Contact</a></li>
          		</ul>
          		<div class="pull-right">
          			<ul class="nav navbar-nav">
          				<?php
          				if(Auth::instance()->logged_in())
						{
						?>
							<li><a href="<?php echo URL::site(Request::current()->param('language').'/user/logout');?>"><?php echo __('Logout');?></a></li>
   						<?php
						}
						else 
						{
						?>
            				<li><a href="<?php echo URL::site(Request::current()->param('language').'/user/login');?>"><?php echo __('Login'); ?></a></li>
            				<li><a href="<?php echo URL::site(Request::current()->param('language').'/user/signup');?>"><?php echo __('Sign up'); ?></a></li>
          				<?php
						};
						?>
          			</ul>
          		</div>
        	</div><!--/.nav-collapse -->
      	</div>
    </nav>