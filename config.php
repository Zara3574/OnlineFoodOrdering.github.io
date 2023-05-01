<?php

/* 
PayPal Setting and Database configuration
*/

//Paypal Settings and Configuration
define('PAYPAL_ID','zaraaa@business.example.com');
define('PAYPAL_SANDBOX', TRUE); //TRUE OR FALSE

define('PAYPAL_RETURN_URL','http://localhost/food/sucess.php');
define('PAYPAL_CANCEL_URL','https://localhost/food/cancel.php');
define('PAYPAL_NOTIFY_URL','https://localhost/food/ipn.php');
define('PAYPAL_CURRENCY','USD');

//Database Configuration
define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','resturant');

//Change Not Required
define('PAYPAL_URL', (PAYPAL_SANDBOX == true) ? "https://www.sandbox.paypal.com/cgi-bin/webscr" : "https://www.paypal.com/cgi-bin/webscr");