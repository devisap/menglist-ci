<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth
$route['sign-in']   = 'AuthController/vSignIn';
$route['sign-up']   = 'AuthController/vSignUp';
$route['login']     = 'AuthController/login';
$route['register']  = 'AuthController/register';
$route['logout']    = 'AuthController/logout';


// ======= USER =======
// TASK
$route['task']              = 'usr/TaskController';
$route['task/store']        = 'usr/TaskController/store';
$route['task/edit']         = 'usr/TaskController/edit';
$route['task/destroy']      = 'usr/TaskController/destroy';
$route['task/changeStat']   = 'usr/TaskController/changeStat';
$route['task/getDataTask']  = 'usr/TaskController/getDataTask';
$route['task/ajxGet']       = 'usr/TaskController/ajxGet';

// FOLDER
$route['folder/store']              = 'usr/FolderController/store';
$route['folder/update']             = 'usr/FolderController/update';
$route['folder/destroy']            = 'usr/FolderController/destroy';
$route['folder/(:any)']             = 'usr/FolderController/vFolder/$1';
$route['folder/getDataTask/(:any)'] = 'usr/FolderController/getDataTask/$1';
$route['folder/ajxGet']       = 'usr/FolderController/ajxGet';

// TAG
$route['tags/store']                = 'usr/TagController/store';
$route['tags/update']               = 'usr/TagController/update';
$route['tags/destroy']              = 'usr/TagController/destroy';
$route['tags/(:any)']               = 'usr/TagController/vTag/$1';
$route['tags/getDataTask/(:any)']   = 'usr/TagController/getDataTask/$1';


$route['calendar']  = 'usr/CalendarController';
$route['statistic'] = 'usr/StatisticController';

//SIDE ADMIN
$route['admin/user']  = 'admin/UserController/vDaftarUser';
$route['admin/transaction']  = 'admin/TransactionController';
$route['admin/transaction/(:any)/(:any)']  = 'admin/TransactionController/aksiUpgradePremium/$1/$2';

// ======= CRONJOB =======
$route['cronjob/reminder-task'] = 'CronjobController/reminderTask';

//PREMIUM
$route['premium']  = 'PremiumController';
$route['premium/store']  = 'PremiumController/store';
