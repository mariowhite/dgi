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
$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'login_controller';
$route['logmein'] = 'login_controller/login';
$route['logmeout'] = 'login_controller/logout';


//cards
$route['cardtable'] = 'card_controller'; //it is now opening just personne physiques
$route['insert_card'] = 'card_controller/prepare_insert_card';
$route['load_edit_card/(:any)'] = 'card_controller/load_edit_card/$1';
$route['delete_card/(:any)'] = 'card_controller/delete_card/$1';
$route['edit_card'] = 'card_controller/edit_card';
$route['load_review_card/(:any)'] = 'card_controller/review/$1';

//dashboard for users
$route['dashboard'] = 'dashboard_controller';


//user accounts
$route['usertable'] = 'user_controller';


//registration
$route['register'] = 'login_controller/register';
$route['add_card'] = 'card_controller/add_card';
$route['register_succ'] = 'card_controller/done_registering';
$route['activate/(:any)/(:any)'] = 'login_controller/activate/$1/$2'; //nif and access_code
$route['email_me_again/(:any)/(:any)/(:any)'] = 'card_controller/send_Welcome_Email/$1/$2/$3'; //email, nif, access_code


//message
$route['message'] = 'message_controller';







//old routes

$route['delete_user/(:any)']='user_controller/delete_user/$1';
$route['update_user'] = 'user_controller/update_user';
$route['get_user/(:any)'] = 'user_controller/get_user/$1';

$route['check_nif'] = 'card_controller/check_nif';







