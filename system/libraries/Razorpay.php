<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CI_Razorpay {
	 function razor_config(){
/**

test api details

**/
$data['keyId'] = 'rzp_test_YtAnuvHunQOXPR';
$data['keySecret'] = 'M0235QxIjBZkbAnmOKs5LVgP';
$data['subscription']="sub_AqSzeJ8DJzdzEw";//"sub_AqSUNJFe3ANEsv";
$data['displayCurrency'] = 'INR';
return $data;
/**

Live api details

**/
 /* $keyId = 'rzp_live_HfP4XVw8OQYZha';
$keySecret = 'FA2Dxq2BKbpIJKK8o79rWqGK';
$displayCurrency = 'INR'; 
 */
//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
	 }
}