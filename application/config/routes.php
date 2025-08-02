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

$route['default_controller']    = 'Home_controller';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

// 1) Statik rotalar (tekil)
$route['iletisim']                          = 'contact/Contact_controller/index';
$route['hakkimizda']                        = 'about/About_controller/index';
$route['sikca-sorulan-sorular']             = 'faq/Faq_controller/index';
$route['urunler/lotus-yemek-odasi']         = 'products/Products_controller/lotus_yemek';
$route['urunler/asya-yemek-odasi']          = 'products/Products_controller/asya_yasam';
$route['urunler/petra-yemek-odasi']         = 'products/Products_controller/petra_yasam';
$route['urunler/enna-yemek-odasi']          = 'products/Products_controller/enna_yemek';
$route['urunler/enna-plus-yemek-odasi']     = 'products/Products_controller/enna_plus_yemek';
// ** Statik change_lang rotaları **
$route['change_lang/(:any)']                = 'home_controller/change_lang/$1';

// 2) Aynı statik rotaların dil prefix’li versiyonları
$route['(turkish|english)/iletisim']                          = 'contact/Contact_controller/index';
$route['(turkish|english)/hakkimizda']                        = 'about/About_controller/index';
$route['(turkish|english)/sikca-sorulan-sorular']             = 'faq/Faq_controller/index';
$route['(turkish|english)/urunler/lotus-yemek-odasi']         = 'products/Products_controller/lotus_yemek';
$route['(turkish|english)/urunler/asya-yemek-odasi']          = 'products/Products_controller/asya_yasam';
$route['(turkish|english)/urunler/petra-yemek-odasi']         = 'products/Products_controller/petra_yasam';
$route['(turkish|english)/urunler/enna-yemek-odasi']          = 'products/Products_controller/enna_yemek';
$route['(turkish|english)/urunler/enna-plus-yemek-odasi']     = 'products/Products_controller/enna_plus_yemek';
$route['english/contact']                                     = 'contact/Contact_controller/index';
$route['english/about']                                       = 'about/About_controller/index';
$route['english/faq']                                         = 'faq/Faq_controller/index';

$route['search/(:any)']                   = 'products/Products_controller/search/$1';
$route['(turkish|english)/search/(:any)'] = 'products/Products_controller/search/$2';


// ** Prefix’li change_lang rotası **
$route['(turkish|english)/change_lang/(:any)']           = 'home_controller/change_lang/$2';

// 3) Genel dil kırp-at kuralları (catch-all)
$route['(turkish|english)']      = $route['default_controller'];
$route['(turkish|english)/(.+)'] = "$2";

