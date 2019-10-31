<?php

$str = "https://api.prismacloud.io/login";

$ch = curl_init ($str);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt ($ch, CURLOPT_POSTFIELDS, "{\"username\":\"0b7072c3-85cf-4bd7-9ae9-7b329c8cd6f9\",\"password\":\"5pQzsk0V10WqMieQl8Z27+ppO34=\",\"customerName\":\"boncap01\"}");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
$output = curl_exec ($ch);

//read the json file contents
     $data = json_decode($output, true);
//echo $output;

echo $data["token"];
echo $data["message"];


