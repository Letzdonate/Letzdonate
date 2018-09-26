<?php
require_once (APPPATH . '/razorpay/razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
class Test_ctrl extends CI_Controller
{

public function __construct()
        {
			parent::__construct();
			$this->ci =& get_instance();
			$this->load->helper('form');
			$this->load->helper('url'); 
			$this->load->library('razorpay');
		}
		
function razorpay(){
	session_start();
	$test=$this->razorpay->razor_config();
	$api = new Api($test['keyId'], $test['keySecret']);
	$displayCurrency=$test['displayCurrency'];
	//echo($test['keyId']);
	$receiptid=rand(1000, 9999);
$orderData = [
    'receipt'         => $receiptid,
    'amount'          => 1 * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);
//print_r($razorpayOrder);

$razorpayOrderId = $razorpayOrder['id'];
//print_r($razorpayOrder);
$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';
$plan          = $api->plan->fetch('plan_AtaQDTFCzgqmgL');
if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic','subscription'], true))
{
    $checkout = $_GET['checkout'];
}
if($checkout == 'automatic'){
$data = [
    "key"               => $test['keyId'],
    "amount"            => $amount,
    "name"              => "kumaran",
    "description"       => "Developer",
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill"           => [
    "name"              => "kumaran",
    "email"             => "elumalai.kumaran14@gmail.com",
    "contact"           => "8056095375",
    ],
    "notes"             => [
    "address"           => "pazhavanthangal",
    "merchant_order_id" => "12312322",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];
}
else if($checkout == 'subscription'){
 $data=[
	"key"  				=> $test['keyId'],
    "subscription_id" 	=> $test['subscription'],
	"amount"			=> $plan->item->unit_amount,
    "name"				=> "kumaran",
    "description"		=> "Software Developer",
    "image"				=> "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill" 			=>[
    "name" 				=> "kumaran",
    "email" 			=> "elumalai.kumaran14@gmail.com",
	"contact"           => "8056095375",
    ],
    "notes" 			=>[
    "address" 			=> "pazhavanthangal"
    ],
    "theme" 			=> [
    "color" 			=> "#F37254"
	],	
	"order_id"          => $razorpayOrderId,
	];
}
if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}
$json = json_encode($data);

require(APPPATH . 'razorpay/checkout/{$checkout}.php');
		}
}		
	