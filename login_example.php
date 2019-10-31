<?php

$str = "https://api.prismacloud.io/login";

$ch = curl_init ($str);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt ($ch, CURLOPT_POSTFIELDS, "{\"username\":\"[Access Key]\",\"password\":\"[Secret Key]\",\"customerName\":\"[Customer Name]\"}");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
$output = curl_exec ($ch);

//read the json file contents
     $data = json_decode($output, true);
//echo $output;

echo $data["token"];
echo $data["message"];


