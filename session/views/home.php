<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST" action="index.php?action=login">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" id="connectbtn">Se connecter</button>
        <?php if (isset($_SESSION['utilisateur'])) {  ?>
        <p>Bonjour, <?= $_SESSION['utilisateur'] ?> (<?= $_SESSION['email'] ?>)</p>
        <a href="index.php?action=index.php">Se déconnecter</a>
  
       <?php } ?>
    </form>

</body>
</html>
