<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-18 01:03:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: upload ~ APPPATH\classes\Controller\home.php [ 15 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:15
2015-05-18 01:03:10 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 15, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:15
2015-05-18 01:11:53 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Validation::$defaul_directory ~ APPPATH\classes\Controller\home.php [ 15 ] in file:line
2015-05-18 01:11:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:12:27 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Validation::$default_directory ~ APPPATH\classes\Controller\home.php [ 15 ] in file:line
2015-05-18 01:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:16:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: default_directory ~ APPPATH\classes\Controller\home.php [ 14 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:14
2015-05-18 01:16:00 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 14, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:14
2015-05-18 01:22:30 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Desafio does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php:94
2015-05-18 01:22:30 --- DEBUG: #0 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#3 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#4 {main} in C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php:94
2015-05-18 01:27:15 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Request as array ~ APPPATH\classes\Controller\home.php [ 16 ] in file:line
2015-05-18 01:27:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:27:52 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Request as array ~ APPPATH\classes\Controller\home.php [ 16 ] in file:line
2015-05-18 01:27:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:28:55 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Request as array ~ APPPATH\classes\Controller\home.php [ 16 ] in file:line
2015-05-18 01:28:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:29:29 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Request as array ~ APPPATH\classes\Controller\home.php [ 16 ] in file:line
2015-05-18 01:29:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 01:34:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: POST home/desafio HTTP/1.1
Host: localhost
Connection: keep-alive
Content-Length: 34
Pragma: no-cache
Cache-Control: no-cache
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Origin: http://localhost
User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36
Content-Type: application/x-www-form-urlencoded
Referer: http://localhost/Kohana/home/desafio
Accept-Encoding: gzip, deflate
Accept-Language: pt-BR,pt;q=0.8,en-US;q=0.6,en;q=0.4

upload=example_input.tab&Ok=Enviar ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:34:34 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:35:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: POST home/desafio HTTP/1.1
Host: localhost
Connection: keep-alive
Content-Length: 34
Cache-Control: max-age=0
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
Origin: http://localhost
User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.152 Safari/537.36
Content-Type: application/x-www-form-urlencoded
Referer: http://localhost/Kohana/
Accept-Encoding: gzip, deflate
Accept-Language: pt-BR,pt;q=0.8,en-US;q=0.6,en;q=0.4

upload=example_input.tab&Ok=Enviar ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:35:06 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:42:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: vars ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:42:00 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:46:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: example_input.tab ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:46:38 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:47:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:47:25 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 01:53:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 15 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:15
2015-05-18 01:53:08 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 15, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:15
2015-05-18 01:55:28 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php:67
2015-05-18 01:55:28 --- DEBUG: #0 C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('XDEBUG_SESSION')
#2 C:\wamp\www\Kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php:67
2015-05-18 01:56:57 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php:67
2015-05-18 01:56:57 --- DEBUG: #0 C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('XDEBUG_SESSION')
#2 C:\wamp\www\Kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php:67
2015-05-18 01:57:14 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php:67
2015-05-18 01:57:14 --- DEBUG: #0 C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('XDEBUG_SESSION')
#2 C:\wamp\www\Kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\Kohana\system\classes\Kohana\Cookie.php:67
2015-05-18 13:26:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 13:26:51 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 13:32:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 13:32:54 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 13:32:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 16 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 13:32:54 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(16): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 16, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:16
2015-05-18 13:34:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: example_input.tab ~ APPPATH\classes\Controller\home.php [ 18 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 13:34:35 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 18, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 13:35:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\home.php [ 18 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 13:35:07 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(18): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\wamp\\www\\Koh...', 18, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 13:39:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: vars ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 13:39:48 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 13:40:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: example_input.tab ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 13:40:10 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 13:40:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 13:40:46 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:05:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:05:47 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:06:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:06:24 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:12:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: FIlES ~ APPPATH\classes\Controller\home.php [ 18 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:12:27 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 18, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:12:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: FILES ~ APPPATH\classes\Controller\home.php [ 18 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:12:44 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 18, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:12:59 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\home.php [ 18 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:12:59 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(18): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 18, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:15:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 18 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:15:53 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 18, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:18
2015-05-18 14:19:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:19:01 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:19:42 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\home.php [ 17 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:17
2015-05-18 14:19:42 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(17): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 17, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:17
2015-05-18 14:19:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: arquivo ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:19:54 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:24:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: arquivo ~ APPPATH\classes\Controller\home.php [ 19 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:24:09 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:36:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\classes\Controller\home.php [ 31 ] in file:line
2015-05-18 14:36:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 14:36:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\classes\Controller\home.php [ 31 ] in file:line
2015-05-18 14:36:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-18 14:37:01 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:37:01 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:48:21 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:48:21 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:57:48 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:57:48 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:58:18 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 14:58:18 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:00:12 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:00:12 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:22:23 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:22:23 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:26:13 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:26:13 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:30:14 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:30:14 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:32:22 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:32:22 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:32:54 --- CRITICAL: Kohana_Exception [ 0 ]: Directory public/upload must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:32:54 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:58:25 --- CRITICAL: Kohana_Exception [ 0 ]: Directory /teste must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 15:58:25 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): Kohana_Upload::save(Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:19
2015-05-18 16:26:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: subir ~ APPPATH\views\desafio.php [ 41 ] in C:\wamp\www\Kohana\application\views\desafio.php:41
2015-05-18 16:26:21 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 41, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:41
2015-05-18 16:27:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: subir ~ APPPATH\views\desafio.php [ 41 ] in C:\wamp\www\Kohana\application\views\desafio.php:41
2015-05-18 16:27:00 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 41, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(9): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:41
2015-05-18 17:18:14 --- CRITICAL: ErrorException [ 2 ]: file() expects parameter 2 to be long, string given ~ APPPATH\classes\Controller\home.php [ 19 ] in file:line
2015-05-18 17:18:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file() expects ...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): file('C:\\wamp\\www\\Koh...', 'FILE_TEXT')
#2 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-18 17:29:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: leituras ~ APPPATH\views\desafio.php [ 45 ] in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 17:29:44 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 45, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(25): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 17:39:54 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\desafio.php [ 45 ] in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 17:39:54 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(45): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 45, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(28): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 17:41:05 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\desafio.php [ 45 ] in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 17:41:05 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(45): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 45, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(28): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 17:41:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\desafio.php [ 45 ] in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 17:41:15 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(45): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 45, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(28): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 18:00:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: campos ~ APPPATH\views\desafio.php [ 45 ] in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 18:00:41 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 45, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 18:02:04 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\desafio.php [ 45 ] in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 18:02:04 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(45): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 45, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 18:09:55 --- CRITICAL: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH\classes\Controller\home.php [ 25 ] in file:line
2015-05-18 18:09:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'C:\\wamp\\www\\Koh...', 25, Array)
#1 C:\wamp\www\Kohana\application\classes\Controller\home.php(25): explode('\\t', Array)
#2 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-18 18:11:03 --- CRITICAL: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH\classes\Controller\home.php [ 25 ] in file:line
2015-05-18 18:11:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'C:\\wamp\\www\\Koh...', 25, Array)
#1 C:\wamp\www\Kohana\application\classes\Controller\home.php(25): explode('\\t', Array)
#2 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-18 18:12:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: campos ~ APPPATH\classes\Controller\home.php [ 22 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:22
2015-05-18 18:12:22 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\Koh...', 22, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:22
2015-05-18 18:13:33 --- CRITICAL: ErrorException [ 2 ]: explode() expects parameter 2 to be string, array given ~ APPPATH\classes\Controller\home.php [ 26 ] in file:line
2015-05-18 18:13:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode() expec...', 'C:\\wamp\\www\\Koh...', 26, Array)
#1 C:\wamp\www\Kohana\application\classes\Controller\home.php(26): explode('\\t', Array)
#2 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-18 18:32:40 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\classes\Controller\home.php [ 23 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:32:40 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(23): Kohana_Core::error_handler(8, 'Uninitialized s...', 'C:\\wamp\\www\\Koh...', 23, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:32:54 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\classes\Controller\home.php [ 23 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:32:54 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(23): Kohana_Core::error_handler(8, 'Uninitialized s...', 'C:\\wamp\\www\\Koh...', 23, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:33:45 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\classes\Controller\home.php [ 23 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:33:45 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(23): Kohana_Core::error_handler(8, 'Uninitialized s...', 'C:\\wamp\\www\\Koh...', 23, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:34:28 --- CRITICAL: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ APPPATH\classes\Controller\home.php [ 23 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:34:28 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(23): Kohana_Core::error_handler(8, 'Uninitialized s...', 'C:\\wamp\\www\\Koh...', 23, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:23
2015-05-18 18:38:48 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\home.php [ 31 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:31
2015-05-18 18:38:48 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(31): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\wamp\\www\\Koh...', 31, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:31
2015-05-18 18:44:32 --- CRITICAL: ErrorException [ 2 ]: explode(): Empty delimiter ~ APPPATH\classes\Controller\home.php [ 31 ] in file:line
2015-05-18 18:44:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'explode(): Empt...', 'C:\\wamp\\www\\Koh...', 31, Array)
#1 C:\wamp\www\Kohana\application\classes\Controller\home.php(31): explode('', 'Jo\xC3\xA3o Silva\tR$1...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-18 18:50:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\desafio.php [ 45 ] in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 18:50:45 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(45): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 45, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(34): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:45
2015-05-18 19:05:11 --- CRITICAL: ErrorException [ 2 ]: file(): Filename cannot be empty ~ APPPATH\classes\Controller\home.php [ 19 ] in file:line
2015-05-18 19:05:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file(): Filenam...', 'C:\\wamp\\www\\Koh...', 19, Array)
#1 C:\wamp\www\Kohana\application\classes\Controller\home.php(19): file('', 2)
#2 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-18 19:09:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\desafio.php [ 47 ] in C:\wamp\www\Kohana\application\views\desafio.php:47
2015-05-18 19:09:01 --- DEBUG: #0 C:\wamp\www\Kohana\application\views\desafio.php(47): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 47, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\Koh...')
#2 C:\wamp\www\Kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\Koh...', Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\Kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\Kohana\application\classes\Controller\home.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\Kohana\application\views\desafio.php:47
2015-05-18 23:13:41 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\home.php [ 35 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:35
2015-05-18 23:13:41 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(35): Kohana_Core::error_handler(8, 'Array to string...', 'C:\\wamp\\www\\Koh...', 35, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:35
2015-05-18 23:18:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH\classes\Controller\home.php [ 40 ] in C:\wamp\www\Kohana\application\classes\Controller\home.php:40
2015-05-18 23:18:04 --- DEBUG: #0 C:\wamp\www\Kohana\application\classes\Controller\home.php(40): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\wamp\\www\\Koh...', 40, Array)
#1 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\Kohana\application\classes\Controller\home.php:40
2015-05-18 23:52:42 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in C:\wamp\www\Kohana\application\classes\Model\desafio.php on line 9 and defined ~ MODPATH\database\classes\Kohana\DB.php [ 89 ] in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89
2015-05-18 23:52:42 --- DEBUG: #0 C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\Koh...', 89, Array)
#1 C:\wamp\www\Kohana\application\classes\Model\desafio.php(9): Kohana_DB::insert('item', 'item_descriptio...')
#2 C:\wamp\www\Kohana\application\classes\Controller\home.php(35): Model_Desafio->insert_item('R$10 off R$20 o...')
#3 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89
2015-05-18 23:55:22 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in C:\wamp\www\Kohana\application\classes\Model\desafio.php on line 9 and defined ~ MODPATH\database\classes\Kohana\DB.php [ 89 ] in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89
2015-05-18 23:55:22 --- DEBUG: #0 C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\Koh...', 89, Array)
#1 C:\wamp\www\Kohana\application\classes\Model\desafio.php(9): Kohana_DB::insert('item', 'item_descriptio...')
#2 C:\wamp\www\Kohana\application\classes\Controller\home.php(35): Model_Desafio->insert_item(Array)
#3 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89
2015-05-18 23:56:37 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in C:\wamp\www\Kohana\application\classes\Model\desafio.php on line 9 and defined ~ MODPATH\database\classes\Kohana\DB.php [ 89 ] in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89
2015-05-18 23:56:37 --- DEBUG: #0 C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\Koh...', 89, Array)
#1 C:\wamp\www\Kohana\application\classes\Model\desafio.php(9): Kohana_DB::insert('item', 'item_descriptio...')
#2 C:\wamp\www\Kohana\application\classes\Controller\home.php(35): Model_Desafio->insert_item('R$10 off R$20 o...')
#3 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89
2015-05-18 23:58:42 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in C:\wamp\www\Kohana\application\classes\Model\desafio.php on line 9 and defined ~ MODPATH\database\classes\Kohana\DB.php [ 89 ] in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89
2015-05-18 23:58:42 --- DEBUG: #0 C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\\wamp\\www\\Koh...', 89, Array)
#1 C:\wamp\www\Kohana\application\classes\Model\desafio.php(9): Kohana_DB::insert('item', 'item_descriptio...')
#2 C:\wamp\www\Kohana\application\classes\Controller\home.php(35): Model_Desafio->insert_item('R$10 off R$20 o...')
#3 C:\wamp\www\Kohana\system\classes\Kohana\Controller.php(84): Controller_Home->action_desafio()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\wamp\www\Kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\Kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\Kohana\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\Kohana\modules\database\classes\Kohana\DB.php:89