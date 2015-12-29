<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-19 00:52:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: film_detail ~ APPPATH/views/library-films-edit.php [ 14 ] in /var/www/application/views/library-films-edit.php:14
2015-05-19 00:52:49 --- DEBUG: #0 /var/www/application/views/library-films-edit.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 14, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/application/classes/Controller/Films.php(14): Kohana_Response->body(Object(View))
#6 /var/www/application/classes/Controller/Films.php(300): Controller_Films->_set_extra_info()
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(117): Kohana_Request->execute()
#13 {main} in /var/www/application/views/library-films-edit.php:14
2015-05-19 00:53:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: film_detail ~ APPPATH/views/library-films-edit.php [ 14 ] in /var/www/application/views/library-films-edit.php:14
2015-05-19 00:53:30 --- DEBUG: #0 /var/www/application/views/library-films-edit.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 14, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/application/classes/Controller/Films.php(14): Kohana_Response->body(Object(View))
#6 /var/www/application/classes/Controller/Films.php(300): Controller_Films->_set_extra_info()
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(117): Kohana_Request->execute()
#13 {main} in /var/www/application/views/library-films-edit.php:14