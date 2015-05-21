<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-28 15:28:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-genres-add could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 15:28:48 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-genres-...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-genres-...', NULL)
#2 /var/www/application/classes/Controller/Genres.php(23): Kohana_View::factory('library-genres-...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 15:28:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-genres-add could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 15:28:49 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-genres-...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-genres-...', NULL)
#2 /var/www/application/classes/Controller/Genres.php(23): Kohana_View::factory('library-genres-...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 15:28:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-genres-add could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 15:28:50 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-genres-...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-genres-...', NULL)
#2 /var/www/application/classes/Controller/Genres.php(23): Kohana_View::factory('library-genres-...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 15:31:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Genres' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 15:31:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 15:31:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Genres' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 15:31:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 15:33:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Genres' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 15:33:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 15:33:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Genres' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 15:33:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 15:33:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Genres' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 15:33:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 15:43:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function post() ~ APPPATH/classes/Controller/Genres.php [ 28 ] in file:line
2015-03-28 15:43:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 15:45:28 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-03-28 15:45:28 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/PageTemplate.php(21): Kohana_Auth::instance()
#5 [internal function]: Controller_PageTemplate->__construct(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/Session.php:125
2015-03-28 15:49:21 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete location model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/application/classes/Controller/Genres.php:53
2015-03-28 15:49:21 --- DEBUG: #0 /var/www/application/classes/Controller/Genres.php(53): Kohana_ORM->delete()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Genres.php:53
2015-03-28 15:49:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete location model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/application/classes/Controller/Genres.php:53
2015-03-28 15:49:26 --- DEBUG: #0 /var/www/application/classes/Controller/Genres.php(53): Kohana_ORM->delete()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Genres.php:53
2015-03-28 15:49:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete location model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/application/classes/Controller/Genres.php:53
2015-03-28 15:49:26 --- DEBUG: #0 /var/www/application/classes/Controller/Genres.php(53): Kohana_ORM->delete()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Genres.php:53
2015-03-28 15:58:24 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-03-28 15:58:24 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/PageTemplate.php(21): Kohana_Auth::instance()
#5 [internal function]: Controller_PageTemplate->__construct(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/Session.php:125
2015-03-28 16:01:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-carries-list could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:01:21 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-carries...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-carries...', NULL)
#2 /var/www/application/classes/Controller/Carries.php(29): Kohana_View::factory('library-carries...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:02:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-carries-list could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:02:35 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-carries...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-carries...', NULL)
#2 /var/www/application/classes/Controller/Carries.php(29): Kohana_View::factory('library-carries...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:02:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-carries-list could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:02:36 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-carries...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-carries...', NULL)
#2 /var/www/application/classes/Controller/Carries.php(29): Kohana_View::factory('library-carries...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_list()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:04:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Carries' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 16:04:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 16:04:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Carries' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 16:04:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 16:05:03 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Carrie' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 16:05:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 16:05:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Carrie' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 16:05:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 16:05:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-carries-edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:05:20 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-carries...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-carries...', NULL)
#2 /var/www/application/classes/Controller/Carries.php(41): Kohana_View::factory('library-carries...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:05:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view library-carries-edit could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:05:21 --- DEBUG: #0 /var/www/system/classes/Kohana/View.php(145): Kohana_View->set_filename('library-carries...')
#1 /var/www/system/classes/Kohana/View.php(30): Kohana_View->__construct('library-carries...', NULL)
#2 /var/www/application/classes/Controller/Carries.php(41): Kohana_View::factory('library-carries...')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/system/classes/Kohana/View.php:145
2015-03-28 16:06:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: location ~ APPPATH/classes/Controller/Carries.php [ 42 ] in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:06:25 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 42, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:06:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: location ~ APPPATH/classes/Controller/Carries.php [ 42 ] in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:06:25 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 42, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:06:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: location ~ APPPATH/classes/Controller/Carries.php [ 42 ] in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:06:45 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 42, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:06:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: location ~ APPPATH/classes/Controller/Carries.php [ 42 ] in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:06:46 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 42, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:42
2015-03-28 16:08:10 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Carries.php [ 48 ] in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:10 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(48): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:32 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Carries.php [ 48 ] in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:32 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(48): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:34 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Carries.php [ 48 ] in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:34 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(48): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:36 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Carries.php [ 48 ] in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:36 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(48): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:53 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Carries.php [ 48 ] in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:08:53 --- DEBUG: #0 /var/www/application/classes/Controller/Carries.php(48): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 48, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carries->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carries))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carries.php:48
2015-03-28 16:15:15 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete carrier model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/application/classes/Controller/Carriers.php:68
2015-03-28 16:15:15 --- DEBUG: #0 /var/www/application/classes/Controller/Carriers.php(68): Kohana_ORM->delete()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carriers->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carriers))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carriers.php:68
2015-03-28 16:16:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete carrier model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /var/www/application/classes/Controller/Carriers.php:68
2015-03-28 16:16:07 --- DEBUG: #0 /var/www/application/classes/Controller/Carriers.php(68): Kohana_ORM->delete()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Carriers->action_remove()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Carriers))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Carriers.php:68
2015-03-28 16:27:50 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'Science Fiction (Sci-Fi)' for key 'uniq_name' [ INSERT INTO `genres` (`name`, `description`) VALUES ('Science Fiction (Sci-Fi)', 'sdf') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 16:27:50 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ge...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Controller/Genres.php(16): Kohana_ORM->save()
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 16:27:53 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'Science Fiction (Sci-Fi)' for key 'uniq_name' [ INSERT INTO `genres` (`name`, `description`) VALUES ('Science Fiction (Sci-Fi)', 'sdf') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 16:27:53 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ge...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Controller/Genres.php(16): Kohana_ORM->save()
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Genres->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Genres))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 16:34:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Genre' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 16:34:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 16:34:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Genre' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-28 16:34:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 16:59:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ';' or '{' ~ APPPATH/classes/Model/Film.php [ 75 ] in file:line
2015-03-28 16:59:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-28 17:20:14 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:20:14 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(34): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:23:09 --- EMERGENCY: ErrorException [ 8 ]: Object of class Database_MySQL_Result could not be converted to int ~ APPPATH/classes/Model/Film.php [ 90 ] in /var/www/application/classes/Model/Film.php:90
2015-03-28 17:23:09 --- DEBUG: #0 /var/www/application/classes/Model/Film.php(90): Kohana_Core::error_handler(8, 'Object of class...', '/var/www/applic...', 90, Array)
#1 /var/www/application/classes/Controller/Library.php(33): Model_Film->get_id('test ')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Film.php:90
2015-03-28 17:23:32 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:23:32 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:24:04 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Library.php [ 33 ] in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:24:04 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(33): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 33, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:24:05 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Library.php [ 33 ] in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:24:05 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(33): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 33, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:25:31 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:25:31 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:03 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:03 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:05 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:05 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:06 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:06 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:19 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:19 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:26:37 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Library.php [ 33 ] in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:26:37 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(33): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 33, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:26:39 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Library.php [ 33 ] in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:26:39 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(33): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 33, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:26:59 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Library.php [ 33 ] in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:26:59 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(33): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 33, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:27:00 --- EMERGENCY: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH/classes/Controller/Library.php [ 33 ] in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:27:00 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(33): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/applic...', 33, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:33
2015-03-28 17:27:41 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:27:41 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:27:42 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:27:42 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:27:59 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:27:59 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:28:01 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'film_id' cannot be null [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES (NULL, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:28:01 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:28:20 --- EMERGENCY: Kohana_Exception [ 0 ]: The film_id property does not exist in the Model_Film class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-03-28 17:28:20 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('film_id', '3')
#1 /var/www/application/classes/Controller/Library.php(33): Kohana_ORM->__set('film_id', '3')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:702
2015-03-28 17:35:10 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/application/classes/Controller/Library.php:34
2015-03-28 17:35:10 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(34): Kohana_ORM->find()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:34
2015-03-28 17:36:58 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '2-2' for key 'PRIMARY' [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES ('2', '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:36:58 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(38): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:37:17 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '2-2' for key 'PRIMARY' [ INSERT INTO `films_users` (`film_id`, `user_id`) VALUES ('2', '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:37:17 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(38): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-28 17:59:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ MODPATH/database/classes/Kohana/Database/Result.php [ 145 ] in /var/www/modules/database/classes/Kohana/Database/Result.php:145
2015-03-28 17:59:44 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Result.php(145): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/module...', 145, Array)
#1 /var/www/application/classes/Model/Film.php(90): Kohana_Database_Result->as_array('id')
#2 /var/www/application/classes/Controller/Library.php(9): Model_Film->list_film_name()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Result.php:145
2015-03-28 21:08:07 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-03-28 21:08:07 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/PageTemplate.php(21): Kohana_Auth::instance()
#5 [internal function]: Controller_PageTemplate->__construct(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/Session.php:125