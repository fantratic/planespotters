<?php

$url = 'https://api.planespotters.net/pub/photos/reg/';
$reg = 'N19986';

$ch = curl_init($url . $reg . '/');
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);


$result = json_encode($response['photos'][0]['link']);

$pic = json_decode($result);

$url = $pic;

echo $result;

echo $url;

echo '<iframe src="' . $url . '" />';

?>