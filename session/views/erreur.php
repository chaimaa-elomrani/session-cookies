<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Erreur d'Utilisateur</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <style>

    /* style.css */
body {
  margin: 0;
  padding: 0;
  font-family: 'Arial', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f5f5f5;
}

.container {
  text-align: center;
  background-color: #ffffff;
  padding: 20px 40px;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #e74c3c;
  margin-bottom: 10px;
}

p {
  color: #555;
  margin-bottom: 20px;
}

button {
    background: linear-gradient(135deg, #ffc857, #ff7c00);
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
    background: linear-gradient(135deg, #ffc857, #ff7c00);
}

 </style>


  <div class="container">
    <h1>Utilisateur non reconnu</h1>
    <p>Veuillez vérifier vos informations et réessayer.</p>
    <button onclick="window.location.reload()">Ressayer</button>
  </div>
</body>
</html>
