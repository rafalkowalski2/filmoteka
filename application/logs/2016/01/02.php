<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-01-02 07:28:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/library-films-my.php [ 79 ] in /var/www/application/views/library-films-my.php:79
2016-01-02 07:28:45 --- DEBUG: #0 /var/www/application/views/library-films-my.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 79, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/application/classes/Controller/Films.php(19): Kohana_Response->body(Object(View))
#6 /var/www/application/classes/Controller/Films.php(338): Controller_Films->_set_extra_info()
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(117): Kohana_Request->execute()
#13 {main} in /var/www/application/views/library-films-my.php:79
2016-01-02 07:28:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/library-films-my.php [ 79 ] in /var/www/application/views/library-films-my.php:79
2016-01-02 07:28:52 --- DEBUG: #0 /var/www/application/views/library-films-my.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 79, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/application/classes/Controller/Films.php(19): Kohana_Response->body(Object(View))
#6 /var/www/application/classes/Controller/Films.php(338): Controller_Films->_set_extra_info()
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(117): Kohana_Request->execute()
#13 {main} in /var/www/application/views/library-films-my.php:79
2016-01-02 07:28:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/library-films-my.php [ 79 ] in /var/www/application/views/library-films-my.php:79
2016-01-02 07:28:54 --- DEBUG: #0 /var/www/application/views/library-films-my.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 79, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/application/classes/Controller/Films.php(19): Kohana_Response->body(Object(View))
#6 /var/www/application/classes/Controller/Films.php(338): Controller_Films->_set_extra_info()
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(117): Kohana_Request->execute()
#13 {main} in /var/www/application/views/library-films-my.php:79
2016-01-02 07:28:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/library-films-my.php [ 79 ] in /var/www/application/views/library-films-my.php:79
2016-01-02 07:28:56 --- DEBUG: #0 /var/www/application/views/library-films-my.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 79, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/application/classes/Controller/Films.php(19): Kohana_Response->body(Object(View))
#6 /var/www/application/classes/Controller/Films.php(338): Controller_Films->_set_extra_info()
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(117): Kohana_Request->execute()
#13 {main} in /var/www/application/views/library-films-my.php:79
2016-01-02 07:31:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH/views/library-films-my.php [ 79 ] in /var/www/application/views/library-films-my.php:79
2016-01-02 07:31:00 --- DEBUG: #0 /var/www/application/views/library-films-my.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 79, Array)
#1 /var/www/system/classes/Kohana/View.php(62): include('/var/www/applic...')
#2 /var/www/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/applic...', Array)
#3 /var/www/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /var/www/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/application/classes/Controller/Films.php(19): Kohana_Response->body(Object(View))
#6 /var/www/application/classes/Controller/Films.php(338): Controller_Films->_set_extra_info()
#7 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#10 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/index.php(117): Kohana_Request->execute()
#13 {main} in /var/www/application/views/library-films-my.php:79