<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://app.clickup.com/api?client_id=W3Q5P30W5K2UUGWQHKA1SEUF4O3C2GOL&redirect_uri=https://testapiclickup.herokuapp.com/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>
