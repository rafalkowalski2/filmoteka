<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-29 00:35:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: string ~ APPPATH/classes/Controller/Library.php [ 9 ] in /var/www/application/classes/Controller/Library.php:9
2015-03-29 00:35:05 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:9
2015-03-29 00:35:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: string ~ APPPATH/classes/Controller/Library.php [ 9 ] in /var/www/application/classes/Controller/Library.php:9
2015-03-29 00:35:17 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:9
2015-03-29 00:35:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: string ~ APPPATH/classes/Controller/Library.php [ 9 ] in /var/www/application/classes/Controller/Library.php:9
2015-03-29 00:35:18 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/applic...', 9, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:9
2015-03-29 00:35:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Film class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:35:28 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /var/www/application/classes/Model/Film.php(92): Kohana_ORM->__get('request')
#2 /var/www/application/classes/Controller/Library.php(54): Model_Film->add_film()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:39:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Film class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:39:27 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /var/www/application/classes/Model/Film.php(98): Kohana_ORM->__get('request')
#2 /var/www/application/classes/Controller/Library.php(54): Model_Film->add_film()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:40:14 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Film class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:40:14 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /var/www/application/classes/Model/Film.php(92): Kohana_ORM->__get('request')
#2 /var/www/application/classes/Controller/Library.php(54): Model_Film->add_film()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:40:15 --- EMERGENCY: Kohana_Exception [ 0 ]: The request property does not exist in the Model_Film class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:40:15 --- DEBUG: #0 /var/www/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('request')
#1 /var/www/application/classes/Model/Film.php(92): Kohana_ORM->__get('request')
#2 /var/www/application/classes/Controller/Library.php(54): Model_Film->add_film()
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/orm/classes/Kohana/ORM.php:603
2015-03-29 00:47:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Film_Details' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-29 00:47:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 00:47:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Film_Details' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-03-29 00:47:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 00:48:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Model/FilmDetails.php [ 53 ] in file:line
2015-03-29 00:48:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 00:48:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Model/FilmDetails.php [ 53 ] in file:line
2015-03-29 00:48:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:01:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Library::$film ~ APPPATH/classes/Controller/Library.php [ 69 ] in /var/www/application/classes/Controller/Library.php:69
2015-03-29 01:01:06 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(69): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 69, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:69
2015-03-29 01:02:39 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `films_users_films_details` (`filmdetails_id`, `film_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:02:39 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(71): Kohana_ORM->add('films', NULL)
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:05:39 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH/classes/Controller/Library.php [ 71 ] in file:line
2015-03-29 01:05:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:06:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Library.php [ 5 ] in file:line
2015-03-29 01:06:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:07:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Library::$_film ~ APPPATH/classes/Controller/Library.php [ 70 ] in /var/www/application/classes/Controller/Library.php:70
2015-03-29 01:07:46 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(70): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 70, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:70
2015-03-29 01:07:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Library::$_film ~ APPPATH/classes/Controller/Library.php [ 70 ] in /var/www/application/classes/Controller/Library.php:70
2015-03-29 01:07:48 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(70): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/applic...', 70, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:70
2015-03-29 01:10:23 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/application/classes/Controller/Library.php:71
2015-03-29 01:10:23 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(71): Kohana_ORM->find()
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:71
2015-03-29 01:11:56 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Library.php [ 65 ] in /var/www/application/classes/Controller/Library.php:65
2015-03-29 01:11:56 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(65): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 65, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:65
2015-03-29 01:12:49 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Library.php [ 65 ] in /var/www/application/classes/Controller/Library.php:65
2015-03-29 01:12:49 --- DEBUG: #0 /var/www/application/classes/Controller/Library.php(65): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/applic...', 65, Array)
#1 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#4 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/index.php(117): Kohana_Request->execute()
#7 {main} in /var/www/application/classes/Controller/Library.php:65
2015-03-29 01:13:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `films_users_films_details` (`filmdetails_id`, `film_id`) VALUES  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:13:19 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(73): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:16:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'filmdetails_id' in 'field list' [ INSERT INTO `films_users_films_details` (`filmdetails_id`, `film_id`) VALUES (9, '16') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:16:29 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(73): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:20:59 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'filmdetails_id' in 'field list' [ INSERT INTO `users_users_films_details` (`filmdetails_id`, `user_id`) VALUES (10, '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:20:59 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(75): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:34:35 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/PageTemplate.php [ 23 ] in file:line
2015-03-29 01:34:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:34:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/PageTemplate.php [ 23 ] in file:line
2015-03-29 01:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:35:17 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/PageTemplate.php [ 23 ] in file:line
2015-03-29 01:35:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:35:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/PageTemplate.php [ 23 ] in file:line
2015-03-29 01:35:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:35:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/PageTemplate.php [ 23 ] in file:line
2015-03-29 01:35:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:35:18 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function pk() on a non-object ~ APPPATH/classes/Controller/PageTemplate.php [ 23 ] in file:line
2015-03-29 01:35:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:36:24 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'details_id' in 'field list' [ INSERT INTO `films_users_films_details` (`details_id`, `film_id`) VALUES (14, '19') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:36:24 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(78): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:38:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'details_id' in 'field list' [ INSERT INTO `films_users_films_details` (`details_id`, `film_id`) VALUES (15, '19') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:38:16 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(80): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:38:17 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'details_id' in 'field list' [ INSERT INTO `films_users_films_details` (`details_id`, `film_id`) VALUES (16, '19') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:38:17 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(80): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:39:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'details_id' in 'field list' [ INSERT INTO `films_users_films_details` (`details_id`, `film_id`) VALUES (17, '19') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:39:32 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(80): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:39:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$film' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/classes/Controller/Library.php [ 29 ] in file:line
2015-03-29 01:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-29 01:39:57 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'details_id' in 'field list' [ INSERT INTO `films_users_films_details` (`details_id`, `film_id`) VALUES (18, '19') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-03-29 01:39:57 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Library.php(81): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Library->action_add_film()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Library))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251