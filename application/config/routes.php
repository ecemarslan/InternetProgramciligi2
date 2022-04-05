<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'FormApp';
$route['listele'] = 'FormApp/listele';

$route['update/(:num)'] = 'FormApp/update';
$route['delete/(:num)'] = 'FormApp/delete';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
