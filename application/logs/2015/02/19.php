<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-19 14:29:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::pos() ~ APPPATH/classes/Controller/Library.php [ 14 ] in file:line
2015-02-19 14:29:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 14:29:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::pos() ~ APPPATH/classes/Controller/Library.php [ 14 ] in file:line
2015-02-19 14:29:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 14:32:32 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry 'Horror' for key 'uniq_name' [ INSERT INTO `genres` (`name`, `description`) VALUES ('Horror', 'dssfsdf') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-02-19 14:32:32 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ge...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/application/classes/Controller/Library.php(16): Kohana_ORM->save()
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_filmgenre()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-02-19 14:53:39 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-02-19 14:53:39 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2015-02-19 14:53:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resilts ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:53:41 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:53:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resilts ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:53:42 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:54:55 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2015-02-19 14:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/var/www/module...', 33, Array)
#1 /var/www/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #9, 'id')
#2 /var/www/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 /var/www/application/classes/Controller/Library.php(36): Kohana_Database_Result->offsetGet('id')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in file:line
2015-02-19 14:54:56 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2015-02-19 14:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/var/www/module...', 33, Array)
#1 /var/www/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #8, 'id')
#2 /var/www/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 /var/www/application/classes/Controller/Library.php(36): Kohana_Database_Result->offsetGet('id')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in file:line
2015-02-19 14:54:59 --- EMERGENCY: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH/database/classes/Kohana/Database/MySQL/Result.php [ 33 ] in file:line
2015-02-19 14:54:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', '/var/www/module...', 33, Array)
#1 /var/www/modules/database/classes/Kohana/Database/MySQL/Result.php(33): mysql_data_seek(Resource id #8, 'id')
#2 /var/www/modules/database/classes/Kohana/Database/Result.php(240): Kohana_Database_MySQL_Result->seek('id')
#3 /var/www/application/classes/Controller/Library.php(36): Kohana_Database_Result->offsetGet('id')
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in file:line
2015-02-19 14:56:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:56:58 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:01 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:12 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:12 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$description ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:23 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$description ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:23 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 14:57:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Library.php [ 37 ] in file:line
2015-02-19 14:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 14:57:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Library.php [ 37 ] in file:line
2015-02-19 14:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:00:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:00:57 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:28 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:28 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:28 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:28 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/Controller/Library.php [ 37 ] in file:line
2015-02-19 15:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:02:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/Controller/Library.php [ 37 ] in file:line
2015-02-19 15:02:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:02:48 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:48 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:48 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:48 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:49 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:02:49 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:04:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'find_all' (T_STRING) ~ APPPATH/classes/Controller/Library.php [ 35 ] in file:line
2015-02-19 15:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:07:56 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'id, name' in 'field list' [ SELECT `id, name`, `genre`.`id` AS `id`, `genre`.`name` AS `name`, `genre`.`description` AS `description` FROM `genres` AS `genre` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-02-19 15:07:56 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id, nam...', 'Model_Genre', Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/application/classes/Controller/Library.php(35): Kohana_ORM->find_all()
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-02-19 15:08:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:08:37 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:08:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:08:40 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:08:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/Library.php [ 36 ] in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:08:41 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/applic...', 36, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:36
2015-02-19 15:16:03 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-02-19 15:16:03 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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
2015-02-19 15:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/Controller/Library.php [ 40 ] in /var/www/application/classes/Controller/Library.php:40
2015-02-19 15:18:06 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 40, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:40
2015-02-19 15:18:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: results ~ APPPATH/classes/Controller/Library.php [ 40 ] in /var/www/application/classes/Controller/Library.php:40
2015-02-19 15:18:07 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 40, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:40
2015-02-19 15:18:12 --- EMERGENCY: ErrorException [ 2 ]: print_r() expects at least 1 parameter, 0 given ~ APPPATH/classes/Controller/Library.php [ 40 ] in file:line
2015-02-19 15:18:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'print_r() expec...', '/var/www/applic...', 40, Array)
#1 /var/www/application/classes/Controller/Library.php(40): print_r()
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in file:line
2015-02-19 15:27:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Library.php [ 39 ] in file:line
2015-02-19 15:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:27:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Library.php [ 39 ] in file:line
2015-02-19 15:27:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:46:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Library.php [ 40 ] in file:line
2015-02-19 15:46:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 15:46:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Library.php [ 40 ] in file:line
2015-02-19 15:46:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-19 20:03:22 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-02-19 20:03:22 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
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