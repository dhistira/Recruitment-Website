<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';
$route['(;any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['email'] = 'Register';
$route['translate_uri_dashes'] = FALSE;

/* End of file routes.php */
/* Location: ./application/config/routes.php */