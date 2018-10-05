<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
 */
$route['default_controller'] = 'WebCtrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
/* Custom Redirect */
$route['admin'] = 'LoginCtrl/index';
$route['logout'] = 'LoginCtrl/logout';
$route['change'] = 'LoginCtrl/change';
$route['forgotPassword'] = 'LoginCtrl/forgotPassword';
$route['ngoreg'] = 'NgoRegCtrl/ngoreg_view';
$route['ngolist'] = 'NgoRegCtrl/get_ngo_list';
$route['categentry'] = 'CategoryCtrl/categ_view';
$route['categlist'] = 'CategoryCtrl/categ_list';
$route['projectentry'] = 'ProjectCtrl/project_view';
$route['projectlist'] = 'ProjectCtrl/proj_list_view';
$route['stories'] = 'WebCtrl/stories';
$route['stories/(:any)'] = 'WebCtrl/stories/$1';
$route['aboutus'] = 'WebCtrl/aboutus';
$route['contact'] = 'WebCtrl/contact';
$route['login'] = 'WebCtrl/login';
$route['ngo_web_register'] = 'WebCtrl/ngo_web_register';
$route['donor_register'] = 'WebCtrl/donor_web_register';
$route['donor_forgotpassword'] = 'WebCtrl/donor_forgotpassword';
$route['uploaddoc'] = 'WebCtrl/uploaddoc';
$route['single_project/(:any)'] = 'WebCtrl/single_project/$1';
$route['payment/(:any)'] = 'WebCtrl/payment/$1';
/* Custom Redirect */
