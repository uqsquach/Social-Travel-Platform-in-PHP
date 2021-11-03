<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'gotrip';
$route['404_override'] = 'gotrip/error404';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'gotrip/about';
$route['login'] = 'gotrip/login';
$route['signup'] = 'gotrip/signup';
$route['signup-submit'] = 'gotrip/signup_submit';
$route['login-user'] = 'gotrip/login_submit';
$route['home/(:num)'] = 'gotrip/home/$1';
$route['home'] = 'gotrip/home';
$route['profile/(:num)'] = 'gotrip/profile/$1';
$route['profile'] = 'gotrip/profile';
$route['username/(:any)'] = 'gotrip/user_profile/$1';
$route['username'] = 'gotrip/user_profile';
$route['search'] = 'gotrip/search';
$route['search/(:any)'] = 'gotrip/search/$1';
$route['search'] = 'gotrip/search';
$route['gotrip/(:num)'] = 'gotrip/each_post/$1';
$route['post-submit'] = 'gotrip/post_submit';
$route['change-password'] = 'gotrip/change_pass';
$route['edit-profile'] = 'gotrip/edit_profile';
$route['forgot-password'] = 'gotrip/forgot_password';
$route['forgot-submit'] = 'gotrip/forgot_password_submit';
$route['edit-submit/(:num)'] = 'gotrip/edit_post/$1';
$route['gotrip/home/post-submit'] = 'gotrip/post_submit';
$route['delete-post/(:num)'] = 'gotrip/delete_post/$1/';
$route['claps/(:num)'] = 'gotrip/claps/$1';
$route['comment/(:num)'] = 'gotrip/comment/$1';
$route['allpost'] = 'gotrip/allpost';
$route['logout'] = 'gotrip/logout';
$route['donate']='gotrip/donate/index';
