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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'PagesController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*  
PAGES:

about-us
gallery	
clinets	
contact-us
*/
// $route['about-us'] = 'PagesController/index';
// $route['gallery'] = 'PagesController/index';
// $route['clients'] = 'PagesController/index';
// $route['contact-us'] = 'PagesController/index';


/* 
LOCATIONS: 

pest-control-services-mumbai

pest-control-services-amravati
pest-control-services-thane
pest-control-services-navi-mumbai
pest-control-services-paratwada
pest-control-services-nashik
pest-control-services-ahmedabad
pest-control-services-pune

pest-control-services-palghar
*/

// $route['pest-control-services-mumbai'] = 'PagesController/index';
// $route['pest-control-services-amravati'] = 'PagesController/index';
// $route['pest-control-services-thane'] = 'PagesController/index';
// $route['pest-control-services-navi-mumbai'] = 'PagesController/index';
// $route['pest-control-services-paratwada'] = 'PagesController/index';
// $route['pest-control-services-nashik'] = 'PagesController/index';
// $route['pest-control-services-ahmedabad'] = 'PagesController/index';
// $route['pest-control-services-pune'] = 'PagesController/index';
// $route['pest-control-services-palghar'] = 'PagesController/index';

// $route['pest-control-services-(:any)'] = 'PagesController/index';

/* 
SERVICES:

cockroach-pest-control-services
termites-pest-control-services
bed-bug-pest-control-service
mosquito-pest-control-services
rat-guard-service
bird-netting-service
fly-pest-control
rodent-pest-control
spider-pest-control
residential-pest-control-service

commercial-pest-control-service
*/
$route['dashboard'] = 'DashboardController/index';

$route['(:any)'] = 'PagesController/static/$1';

$route['api/enquiry/insert']['POST'] = 'DataController/insert';
$route['api/short_enquiry/insert']['POST'] = 'DataController/short_insert';


// $route['cockroach-pest-control-services'] = 'PagesController/services/$1';
// $route['termites-pest-control-services'] = 'PagesController/services/$1';
// $route['bed-bug-pest-control-service'] = 'PagesController/services/$1';
// $route['mosquito-pest-control-services'] = 'PagesController/services/$1';
// $route['rat-guard-service'] = 'PagesController/services/$1';
// $route['bird-netting-service'] = 'PagesController/services/$1';
// $route['fly-pest-control'] = 'PagesController/services/$1';
// $route['rodent-pest-control'] = 'PagesController/services/$1';
// $route['spider-pest-control'] = 'PagesController/services/$1';
// $route['residential-pest-control-service'] = 'PagesController/services/$1';
// $route['commercial-pest-control-service'] = 'PagesController/services/$1';


/*  
LOCATION-SERVICES:

Mumbai
cockroach-pest-control-services-mumbai
termites-pest-control-services-mumbai
bed-bug-pest-control-service-mumbai

Amravati
cockroach-pest-control-services-amravati
termites-pest-control-services-amravati
bed-bug-pest-control-service-amravati

Thane
cockroach-pest-control-services-thane
termites-pest-control-services-thane
bed-bug-pest-control-service-thane

Navi-Mumbai
cockroach-pest-control-services-navi-mumbai
termites-pest-control-services-navi-mumbai
bed-bug-pest-control-service-navi-mumbai
*/

// $route['cockroach-pest-control-services-mumbai'] = 'PagesController/index';
// $route['termites-pest-control-services-mumbai'] = 'PagesController/index';
// $route['bed-bug-pest-control-service-mumbai'] = 'PagesController/index';

// $route['cockroach-pest-control-services-amravati'] = 'PagesController/index';
// $route['termites-pest-control-services-amravati'] = 'PagesController/index';
// $route['bed-bug-pest-control-service-amravati'] = 'PagesController/index';

// $route['cockroach-pest-control-services-thane'] = 'PagesController/index';
// $route['termites-pest-control-services-thane'] = 'PagesController/index';
// $route['bed-bug-pest-control-service-thane'] = 'PagesController/index';

// $route['cockroach-pest-control-services-navi-mumbai'] = 'PagesController/index';
// $route['termites-pest-control-services-navi-mumbai'] = 'PagesController/index';
// $route['bed-bug-pest-control-service-navi-mumbai'] = 'PagesController/index';

// $route['(:any)-pest-control-service-(:any)'] = 'PagesController/index';
