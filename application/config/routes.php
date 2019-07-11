<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'AdminController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'AdminController/dashboard';


// Setup
$route['category'] = 'SetupController/category';
$route['subcategory'] = 'SetupController/subcategory';





$route['products'] = 'ProductController/products';
$route['addproduct'] = 'ProductController/addproduct';
$route['editproduct/(:any)'] = 'ProductController/editproduct/$1';


$route['production'] = 'SetupController/production';
$route['producttransfer'] = 'SetupController/producttransfer';
$route['totalinventory'] = 'SetupController/totalinventory';
$route['inventoryhistory'] = 'SetupController/inventoryhistory';

// Godown
// $route['godowns'] = 'SetupController/godowns';
// $route['addgodown'] = 'SetupController/addgodown';

$route['trucks'] = 'SetupController/trucks';
$route['addtruck'] = 'SetupController/addtruck';




$route['accounts'] = 'SetupController/accounts';
$route['addaccount'] = 'SetupController/addaccount';
$route['balancetransfer'] = 'SetupController/balancetransfer';
$route['balancesheet'] = 'SetupController/balancesheet';
$route['transectionhistory'] = 'SetupController/transectionhistory';



$route['purchase'] = 'SetupController/purchase';
$route['sell'] = 'SetupController/sell';
$route['expense'] = 'SetupController/expense';


$route['addemployee'] = 'HrController/addemployee';
$route['employees'] = 'HrController/employees';
$route['paysalary'] = 'HrController/paysalary';
$route['paymentreport'] = 'HrController/paymentreport';
$route['salarystatement'] = 'HrController/salarystatement';