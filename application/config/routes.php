<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['principal/login'] = 'LoginController/login';

$route['principal'] = 'HomeController/principal';

$route['login'] = 'LoginController/loginForm';
$route['logout'] = 'LoginController/logout';
$route['default_controller'] = 'LoginController/loginForm';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

