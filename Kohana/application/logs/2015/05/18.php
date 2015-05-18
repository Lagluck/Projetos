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