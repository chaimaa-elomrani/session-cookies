<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['langue'])) {
        $langue = htmlspecialchars($_POST['langue']); 
        setcookie("langue_preferee", $langue, time() + (365 * 24 * 60 * 60)); 
        header("Location: " . $_SERVER['PHP_SELF']); 
        exit();
    }
}

$langue_preferee = isset($_COOKIE['langue_preferee']) ? $_COOKIE['langue_preferee'] : null;

$messages = [
    "fr" => "Bienvenue sur notre site !",
    "en" => "Welcome to our website!",
    "es" => "¡Bienvenido a nuestro sitio web!"
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cookies/assets/style2.css">
    <title>Gestion des Cookies</title>
</head>
<body>
   <style>
   
body {
    background-color: #1e1e2f; 
    color: #f5f5f5; 
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 20px;
}


h1 {
    text-align: center;
    font-size: 2rem;
    color: #ffcc00;
    margin-bottom: 20px;
}


p {
    text-align: center;
    font-size: 1.2rem;
    margin-bottom: 20px;
}


form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #2a2a3b; 
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
}


label {
    font-size: 1rem;
    color: #ffcc00; 
    display: block;
    margin-bottom: 8px;
}


select {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
    background-color: #33334c;
    color: #f5f5f5;
    margin-bottom: 20px;
    outline: none;
}

button {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    font-weight: bold;
    color: #1e1e2f; 
    background-color: #ffcc00; 
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #e6b800; 
}


.center-text {
    text-align: center;
}

   </style>

    <h1>Choisissez votre langue préférée</h1>

    <?php if ($langue_preferee && isset($messages[$langue_preferee])): ?>
        <p><strong>Message personnalisé :</strong> <?= $messages[$langue_preferee]; ?></p>
    <?php else: ?>
        <p><strong>Aucune préférence de langue enregistrée.</strong></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="langue">Langue :</label>
        <select name="langue" id="langue" required>
            <option value="fr" <?= $langue_preferee === "fr" ? "selected" : ""; ?>>Français</option>
            <option value="en" <?= $langue_preferee === "en" ? "selected" : ""; ?>>Anglais</option>
            <option value="es" <?= $langue_preferee === "es" ? "selected" : ""; ?>>Espagnol</option>
        </select>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
