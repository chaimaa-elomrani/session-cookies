<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' ){
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Vérification basique des identifiants
        if ($email === 'admin@example.com' && $password === 'password123') {
            $_SESSION['utilisateur'] = 'Admin';
            $_SESSION['email'] = $email;
            header('Location: views/adminpage.php');
            exit;
        } else {
            // echo 'Email ou mot de passe incorrect';
            header('Location: views/erreur.php');
            exit;
        }
    }
    
    
}
// include('views/home.php');