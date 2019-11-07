<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://0.0.0.0:8080/server.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'text' => 'Webstart is nice!'
]);

$result = curl_exec($ch);
$response = json_decode($result);

if (curl_getinfo($ch)['http_code'] !== 200) {
    echo $response->data->error;
    die();
}

echo $response->data->text;
print_r($result);