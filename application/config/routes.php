<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['home']=  'welcome/home';
$route['login']= 'logins/signin';

$route['signup']= 'logins/signup';
$route['user'] = 'logins/login';

$route['regissubmit'] ='logins/regissubmit';
$route['signout'] = 'logins/signout';


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
