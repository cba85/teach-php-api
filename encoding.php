<?php

$response = file_get_contents('0.0.0.0:8080');
echo $response;

$users = json_decode($response);
print_r($users);

foreach ($users as $user) {
    echo  $user->name . ' - ' . $user->email . '<br>';
}