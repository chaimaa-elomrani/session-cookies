<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des Produits</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    /* Style Global */
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4fdf4;
      color: #333;
    }

    header {
      background-color: #28a745;
      color: white;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      margin: 0;
      font-size: 2rem;
    }

    main {
      padding: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .toolbar input {
      padding: 0.8rem;
      width: 300px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
    }

    .toolbar button {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      font-size: 1rem;
      transition: background-color 0.3s;
    }

    .toolbar button:hover {
      background-color: #218838;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 1.5rem;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      overflow: hidden;
    }

    thead {
      background-color: #28a745;
      color: white;
    }

    thead th {
      text-align: left;
      padding: 1rem;
      font-weight: 600;
    }

    tbody tr {
      border-bottom: 1px solid #eee;
    }

    tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }

    tbody td {
      padding: 1rem;
      text-align: left;
    }

    tbody td:last-child {
      text-align: center;
    }

    tbody button {
      background-color: #dc3545;
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    tbody button:hover {
      background-color: #c82333;
    }

    .pagination {
      display: flex;
      justify-content: center;
      gap: 1rem;
    }

    .pagination a {
      padding: 0.5rem 1rem;
      text-decoration: none;
      color: #28a745;
      border: 1px solid #28a745;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .pagination a:hover {
      background-color: #28a745;
      color: white;
    }

    footer {
      text-align: center;
      padding: 1.5rem;
      background-color: #28a745;
      color: white;
      margin-top: 2rem;
    }
  </style>
</head>
<body>
  <header>
    <h1>Gestion des Produits</h1>
  </header>

  <main>
    <!-- Barre d'outils -->
    <div class="toolbar">
      <input type="text" placeholder="Rechercher un produit...">
      <button>Ajouter un produit</button>
    </div>

    <!-- Table des produits -->
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prix</th>
          <th>Description</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Produit A</td>
          <td>100 €</td>
          <td>Description du produit A</td>
          <td><button>Supprimer</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Produit B</td>
          <td>150 €</td>
          <td>Description du produit B</td>
          <td><button>Supprimer</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Produit C</td>
          <td>200 €</td>
          <td>Description du produit C</td>
          <td><button>Supprimer</button></td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="pagination">
      <a href="#">&laquo;</a>
      <a href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">&raquo;</a>
    </div>
  </main>

  <footer>
    <p>© 2024 Gestion des Produits - Tous droits réservés</p>
  </footer>
</body>
</html>
