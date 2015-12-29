<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-15 04:41:07 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-05-15 04:41:07 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/PageTemplate.php(22): Kohana_Auth::instance()
#5 [internal function]: Controller_PageTemplate->__construct(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/Session.php:125
2015-05-15 13:58:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function where() ~ APPPATH/classes/Controller/Films.php [ 104 ] in file:line
2015-05-15 13:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 14:08:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'genres_id' in 'field list' [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES ('4', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:08:19 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(106): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:13:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'film_id' in 'field list' [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES ('4', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:13:13 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(106): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:15:27 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'film_id' in 'field list' [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES ('4', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:15:27 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(106): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:24:33 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-4' for key 'PRIMARY' [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES ('4', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:24:33 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(106): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:25:11 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'carrier_id' in 'field list' [ INSERT INTO `films_carries` (`carrier_id`, `film_id`) VALUES ('1', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:25:11 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(120): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:29:20 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-4' for key 'PRIMARY' [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES ('4', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:29:20 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(106): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:29:38 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'carrier_id' in 'field list' [ INSERT INTO `users_carries` (`carrier_id`, `user_id`) VALUES ('1', '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:29:38 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(122): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:31:42 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-4' for key 'PRIMARY' [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES ('4', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:31:42 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(106): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:40:41 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-4' for key 'PRIMARY' [ INSERT INTO `films_genres` (`genres_id`, `film_id`) VALUES ('4', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:40:41 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(106): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:48:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '2' in 'on clause' [ SELECT COUNT(*) AS `total_count` FROM `films_genres` JOIN `films` ON (`films`.`id` = `films_genres`.`film_id`) JOIN `users` ON (`users`.`id` = `2`) JOIN `films_users` ON (`films_users`.`user_id` = `2`) WHERE `films_genres`.`film_id` = '20' AND `films_users`.`user_id` = '2' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:48:29 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 /var/www/application/classes/Model/Genres.php(50): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Films.php(105): Model_Genres->user_has_already_add_genres_to_his_film('20', '2')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:49:32 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-1' for key 'PRIMARY' [ INSERT INTO `films_carries` (`carrier_id`, `film_id`) VALUES ('1', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:49:32 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(127): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:49:34 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-1' for key 'PRIMARY' [ INSERT INTO `films_carries` (`carrier_id`, `film_id`) VALUES ('1', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:49:34 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(127): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:50:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/Films.php [ 108 ] in file:line
2015-05-15 14:50:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 14:50:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/Films.php [ 108 ] in file:line
2015-05-15 14:50:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 14:50:20 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-1' for key 'PRIMARY' [ INSERT INTO `films_carries` (`carrier_id`, `film_id`) VALUES ('1', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:50:20 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(128): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:53:33 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Carrier::user_has_already_add_carrier_to_his_film(), called in /var/www/application/classes/Controller/Films.php on line 127 and defined ~ APPPATH/classes/Model/Carrier.php [ 32 ] in /var/www/application/classes/Model/Carrier.php:32
2015-05-15 14:53:33 --- DEBUG: #0 /var/www/application/classes/Model/Carrier.php(32): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 32, Array)
#1 /var/www/application/classes/Controller/Films.php(127): Model_Carrier->user_has_already_add_carrier_to_his_film('20')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Carrier.php:32
2015-05-15 14:53:34 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Carrier::user_has_already_add_carrier_to_his_film(), called in /var/www/application/classes/Controller/Films.php on line 127 and defined ~ APPPATH/classes/Model/Carrier.php [ 32 ] in /var/www/application/classes/Model/Carrier.php:32
2015-05-15 14:53:34 --- DEBUG: #0 /var/www/application/classes/Model/Carrier.php(32): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 32, Array)
#1 /var/www/application/classes/Controller/Films.php(127): Model_Carrier->user_has_already_add_carrier_to_his_film('20')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Carrier.php:32
2015-05-15 14:53:35 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Carrier::user_has_already_add_carrier_to_his_film(), called in /var/www/application/classes/Controller/Films.php on line 127 and defined ~ APPPATH/classes/Model/Carrier.php [ 32 ] in /var/www/application/classes/Model/Carrier.php:32
2015-05-15 14:53:35 --- DEBUG: #0 /var/www/application/classes/Model/Carrier.php(32): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/applic...', 32, Array)
#1 /var/www/application/classes/Controller/Films.php(127): Model_Carrier->user_has_already_add_carrier_to_his_film('20')
#2 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#5 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/index.php(117): Kohana_Request->execute()
#8 {main} in /var/www/application/classes/Model/Carrier.php:32
2015-05-15 14:53:43 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-12' for key 'PRIMARY' [ INSERT INTO `films_locations` (`location_id`, `film_id`) VALUES ('12', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:53:43 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(149): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:53:44 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '20-12' for key 'PRIMARY' [ INSERT INTO `films_locations` (`location_id`, `film_id`) VALUES ('12', '20') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 14:53:44 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `fi...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(149): Kohana_ORM->add('films', Object(Model_Film))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:13:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:13:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:13:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:14:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:14:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:14:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:14:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:14:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:14:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:14:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:14:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:14:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Model/Film.php [ 105 ] in file:line
2015-05-15 15:14:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:18:50 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /var/www/system/classes/Kohana/Session.php:125
2015-05-15 15:18:50 --- DEBUG: #0 /var/www/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /var/www/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /var/www/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /var/www/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /var/www/application/classes/Controller/PageTemplate.php(22): Kohana_Auth::instance()
#5 [internal function]: Controller_PageTemplate->__construct(Object(Request), Object(Response))
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(117): Kohana_Request->execute()
#10 {main} in /var/www/system/classes/Kohana/Session.php:125
2015-05-15 15:18:50 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'films_locations.locations_id' in 'on clause' [ SELECT `films`.`name` AS `f_name`, `genres`.`name` AS `g_name` FROM `films` JOIN `films_users` ON (`films_users`.`film_id` = `films`.`id`) JOIN `users` ON (`users`.`id` = `films_users`.`user_id`) JOIN `films_genres` ON (`films_genres`.`film_id` = `films`.`id`) JOIN `genres` ON (`genres`.`id` = `films_genres`.`genres_id`) JOIN `films_locations` ON (`films_locations`.`film_id` = `films`.`id`) JOIN `locations` ON (`locations`.`id` = `films_locations`.`locations_id`) WHERE `users`.`id` = '2' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:18:50 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `films`....', false, Array)
#1 /var/www/application/classes/Model/Film.php(120): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Films.php(178): Model_Film->get_user_films('2')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:18:51 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'films_locations.locations_id' in 'on clause' [ SELECT `films`.`name` AS `f_name`, `genres`.`name` AS `g_name` FROM `films` JOIN `films_users` ON (`films_users`.`film_id` = `films`.`id`) JOIN `users` ON (`users`.`id` = `films_users`.`user_id`) JOIN `films_genres` ON (`films_genres`.`film_id` = `films`.`id`) JOIN `genres` ON (`genres`.`id` = `films_genres`.`genres_id`) JOIN `films_locations` ON (`films_locations`.`film_id` = `films`.`id`) JOIN `locations` ON (`locations`.`id` = `films_locations`.`locations_id`) WHERE `users`.`id` = '2' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:18:51 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `films`....', false, Array)
#1 /var/www/application/classes/Model/Film.php(120): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Films.php(178): Model_Film->get_user_films('2')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:18:52 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'films_locations.locations_id' in 'on clause' [ SELECT `films`.`name` AS `f_name`, `genres`.`name` AS `g_name` FROM `films` JOIN `films_users` ON (`films_users`.`film_id` = `films`.`id`) JOIN `users` ON (`users`.`id` = `films_users`.`user_id`) JOIN `films_genres` ON (`films_genres`.`film_id` = `films`.`id`) JOIN `genres` ON (`genres`.`id` = `films_genres`.`genres_id`) JOIN `films_locations` ON (`films_locations`.`film_id` = `films`.`id`) JOIN `locations` ON (`locations`.`id` = `films_locations`.`locations_id`) WHERE `users`.`id` = '2' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:18:52 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `films`....', false, Array)
#1 /var/www/application/classes/Model/Film.php(120): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Films.php(178): Model_Film->get_user_films('2')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:23:28 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'films_users_films_details.datails_id' in 'on clause' [ SELECT `films`.`name` AS `f_name`, `genres`.`name` AS `g_name`, `locations`.`name` AS `l_name`, `user_film_details`.`resolution` AS `d_resolution` FROM `films` JOIN `films_users` ON (`films_users`.`film_id` = `films`.`id`) JOIN `users` ON (`users`.`id` = `films_users`.`user_id`) JOIN `films_genres` ON (`films_genres`.`film_id` = `films`.`id`) JOIN `genres` ON (`genres`.`id` = `films_genres`.`genres_id`) JOIN `films_locations` ON (`films_locations`.`film_id` = `films`.`id`) JOIN `locations` ON (`locations`.`id` = `films_locations`.`location_id`) JOIN `films_users_films_details` ON (`films_users_films_details`.`film_id` = `films`.`id`) JOIN `user_film_details` ON (`user_film_details`.`id` = `films_users_films_details`.`datails_id`) WHERE `users`.`id` = '2' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:23:28 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `films`....', false, Array)
#1 /var/www/application/classes/Model/Film.php(126): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Films.php(178): Model_Film->get_user_films('2')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:23:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'films_users_films_details.datails_id' in 'on clause' [ SELECT `films`.`name` AS `f_name`, `genres`.`name` AS `g_name`, `locations`.`name` AS `l_name`, `user_film_details`.`resolution` AS `d_resolution` FROM `films` JOIN `films_users` ON (`films_users`.`film_id` = `films`.`id`) JOIN `users` ON (`users`.`id` = `films_users`.`user_id`) JOIN `films_genres` ON (`films_genres`.`film_id` = `films`.`id`) JOIN `genres` ON (`genres`.`id` = `films_genres`.`genres_id`) JOIN `films_locations` ON (`films_locations`.`film_id` = `films`.`id`) JOIN `locations` ON (`locations`.`id` = `films_locations`.`location_id`) JOIN `films_users_films_details` ON (`films_users_films_details`.`film_id` = `films`.`id`) JOIN `user_film_details` ON (`user_film_details`.`id` = `films_users_films_details`.`datails_id`) WHERE `users`.`id` = '2' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:23:29 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `films`....', false, Array)
#1 /var/www/application/classes/Model/Film.php(126): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Films.php(178): Model_Film->get_user_films('2')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:24:29 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'films_users_films_details.datail_id' in 'on clause' [ SELECT `films`.`name` AS `f_name`, `genres`.`name` AS `g_name`, `locations`.`name` AS `l_name`, `user_film_details`.`resolution` AS `d_resolution` FROM `films` JOIN `films_users` ON (`films_users`.`film_id` = `films`.`id`) JOIN `users` ON (`users`.`id` = `films_users`.`user_id`) JOIN `films_genres` ON (`films_genres`.`film_id` = `films`.`id`) JOIN `genres` ON (`genres`.`id` = `films_genres`.`genres_id`) JOIN `films_locations` ON (`films_locations`.`film_id` = `films`.`id`) JOIN `locations` ON (`locations`.`id` = `films_locations`.`location_id`) JOIN `films_users_films_details` ON (`films_users_films_details`.`film_id` = `films`.`id`) JOIN `user_film_details` ON (`user_film_details`.`id` = `films_users_films_details`.`datail_id`) WHERE `users`.`id` = '2' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:24:29 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `films`....', false, Array)
#1 /var/www/application/classes/Model/Film.php(126): Kohana_Database_Query->execute()
#2 /var/www/application/classes/Controller/Films.php(178): Model_Film->get_user_films('2')
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_my()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:28:33 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '2-4' for key 'PRIMARY' [ INSERT INTO `users_genres` (`genres_id`, `user_id`) VALUES ('4', '2') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2015-05-15 15:28:33 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/application/classes/Controller/Films.php(115): Kohana_ORM->add('users', Object(Model_User))
#3 /var/www/system/classes/Kohana/Controller.php(84): Controller_Films->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Films))
#6 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/index.php(117): Kohana_Request->execute()
#9 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251