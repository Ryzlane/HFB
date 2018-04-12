<?php

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

$errorMessagesCreate = [];
$successMessagesCreate = [];
$createstate = [];
$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();

    if(isset($_POST['create'])){
        if(!empty($_POST)){
            $pseudo = trim($_POST['pseudo']);
            $password = trim($_POST['password']);
            $email = trim($_POST['email']);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            if(empty($pseudo and $password and $email)){
                $errorMessagesCreate[] = 'Missing field';
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL) and !empty($pseudo and $password and $email)){
                $errorMessagesCreate[] = 'Invalid mail';
            }
            if(strlen($pseudo) > 15 || strlen($pseudo) < 3){
                $errorMessagesCreate[] = 'Please enter a pseudo between 3 and 15 characters'; 
            }
            foreach ($users as $_users){
                if ($_POST['email'] == $_users->email){
                    $createstate = 'ErrorMail';                  
                }
            }
            if($createstate == 'ErrorMail'){
                $errorMessagesCreate[] = 'Already used email';
            }
            foreach ($users as $_users){
                if ($_POST['pseudo'] == $_users->pseudo){
                    $createstate = 'ErrorPseudo';                  
                }
            }
            if($createstate == 'ErrorPseudo'){
                $errorMessagesCreate[] = 'Already used Pseudo';
            }
            if(empty($errorMessagesCreate)){
                $prepare = $pdo->prepare('INSERT INTO users (pseudo, email, hashed_password)
                VALUES (:pseudo, :email, :hashed_password)');
                $prepare->bindValue(':pseudo', $pseudo);
                $prepare->bindValue(':hashed_password', $hashed_password);
                $prepare->bindValue(':email', $email);
                $exec = $prepare->execute();
                $successMessagesCreate[] = 'New account created';
                $_POST['pseudo'] = '';
                $_POST['hashed_password'] = '';
                $_POST['email'] = '';
            }else{
                $_POST['pseudo'] = '';
                $_POST['hashed_password'] = '';                
                $_POST['email'] = '';
            }
        }
        header("Location: ./signup");
    }