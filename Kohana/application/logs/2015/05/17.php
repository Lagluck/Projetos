<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-17 18:33:46 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant home - assumed 'home' ~ APPPATH\classes\Controller\home.php [ 7 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:7
2015-05-17 18:33:46 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(7): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\wamp\\www\\Koh...', 7, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:7