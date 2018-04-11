<?php 

// HERE ARE THE CONNECTIONS TO DATABASES AND APIS

define('DB_HOST', 'localhost');
define('DB_PORT', '8889');
define('DB_NAME', 'hfb');
define('DB_USER', 'root');
define('DB_PASS', 'root');

try
{
    // Try to connect to database
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASS);

    // Set fetch mode to object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (Exception $e)
{
    // Failed to connect
    die('Could not connect');
}

// CONNECTION TO SUPERHERO API
// $id = '';
// $result = file_get_contents('http://superheroapi.com/api/1836814349697165/' . $id);
// // Json decode
// $result = json_decode($result);

// AND ALSO THE FETCHS

$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();