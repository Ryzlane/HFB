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

$errorMessagesLogin = [];
$successMessagesLogin = [];
$logstate = [];
$query = $pdo->query('SELECT * FROM users');
$users = $query->fetchAll();

    if(isset($_POST['submit'])){
        if(!empty($_POST)){
            $pseudo = trim($_POST['pseudo']);
            $email = trim($_POST['email']);            
            $password = trim($_POST['password']);
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            if(empty(($pseudo || $email) and $password)){
                $errorMessagesLogin[] = 'Missing field';
            }else{
                foreach ($users as $_users){
                    if (($_POST['pseudo'] == $_users->pseudo || $_POST['email'] == $_users->email) and password_verify($password, $_users->hashed_password)){
                        $_POST['pseudo'] = $_users->pseudo;
                        $_SESSION['valid'] = true;
                        $_SESSION['pseudo'] = $_POST['pseudo'];
                        $_SESSION['id'] = $_users->id;              
                        $_SESSION['wallet'] = $_users->wallet;
                        $_SESSION['numberbets'] = $_users->numberbets;
                        $_SESSION['numberbetswon'] = $_users->numberbetswon;
                        $logstate = 'success';
                        setcookie('pseudo', $_POST['pseudo'], time() + 3600, null, null, false, true);
                        header("Location: .");
                    }
                }
                if ($logstate == 'success'){
                    $successMessagesLogin[] = 'You have logged in';
                }else{
                    $errorMessagesLogin[] = 'Wrong username or password';                    
                }
            }
        }
    }