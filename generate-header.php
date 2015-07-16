<?php

/*
 * Generate a token to authenticate with the Crowd Valley API
*/

include_once('Header.php');
include_once('Encrypt.php');

// Enter your Crowd Valley API Key and Secret
$apiKey = 'siviacapital-001';
$apiSecret = '2tG2eINoFa';

// Enter your Username and Password
$username = 'ben@siviacapital.com';
$password = 'WC3QLxeWLZ';

// Enter your Network Name
$network = 'siviacapital';

// Enter the API endpoint. This should be "https://sandbox.crowdvalley.com/v1" 
// unless you have a paid account with Crowd Valley and you are using the live API
$apiURL = "https://sandbox.crowdvalley.com/v1";

//
//
// No need to touch anything below this line
//
//

// if API is under Basic Authentication, enter BasicAuth username and password
$apiBasicUsername = '';
$apiBasicPassword = '';

$header = new Header($apiKey, $apiSecret);
$encrypt = new Encrypt();
$encryptedPass = $encrypt->encrypt($apiSecret,$password,16);

$token = $header->createToken($username, $encryptedPass);

echo $token."\n\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $apiBasicUsername . ":" . $apiBasicPassword );

$headers = array();
$headers[] = 'cv-auth: '.$token;
$headers[] = 'network: '.$network;

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);

print  $server_output."\n";
