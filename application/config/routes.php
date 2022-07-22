<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//VIEWS
$route['default_controller'] = 'dashboard/index';
$route['dashboard'] = 'dashboard/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//FUNCTIONS
$route['all_users'] = 'user_api/all_users';
$route['create-user'] = 'user_api/insert_user';
$route['single_user'] = 'user_api/fetch_single_user';
$route['update_user'] = 'user_api/update_user';
$route['delete_user'] = 'user_api/delete_user';
