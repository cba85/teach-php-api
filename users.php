<?php

header('Content-Type: application/json');

$user = [
    'name' => 'Clement',
    'email' => 'clement@websatart.com',
];

$json = json_encode($user);
echo $json;

$db = new PDO('mysql:host=localhost;dbname=project', 'table', 'secret');
$users = $db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_OBJ);
print_r($users);

$json = json_encode($users);
echo $json;