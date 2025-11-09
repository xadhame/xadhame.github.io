<?php
include("connexion.php");
$sql = "SELECT * FROM etudiants";
$result = mysqli_query($conn , $sql);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des étudiants</title>
<style>
body {
  font-family: 'Segoe UI', sans-serif;
  background: #1e1e1e;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh;
  margin: 0;
  padding: 20px;
}

header img {
  max-width: 150px;
  margin-bottom: 20px;
}

h2 {
  color: rgb(109,59,46);
  margin-bottom: 20px;
}

table {
  border-collapse: collapse;
  width: 100%;
  max-width: 800px;
  background-color: #2c2c2c;
  border-radius: 0.5rem;
  overflow: hidden;
  box-shadow: 0 0 15px rgba(0,0,0,0.4);
}

th, td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #707070;
}

th {
  background-color: rgb(109,59,46);
  color: #fff;
}

tr:hover {
  background-color: #3a3a3a;
}

a {
  color: rgb(109,59,46);
  text-decoration: none;
  font-weight: 600;
}

a:hover {
  text-decoration: underline;
}

p a {
  display: inline-block;
  margin-top: 20px;
  padding: 0.75rem 1.5rem;
  background-color: rgb(109,59,46);
  color: #fff;
  border-radius: 3rem;
  text-decoration: none;
  transition: all 0.3s ease;
}

p a:hover {
  background-color: #fff;
  color: rgb(109,59,46);
}
</style>
</head>
<body>

<header>
    <img src="logo_esto.png" alt="Logo ESTO">
</header>

<h2>Liste des étudiants</h2>

<table>
    <tr>
        <th>ID</th><th>Nom</th><th>Prénom</th><th>Âge</th><th>Actions</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nom']}</td>
                <td>{$row['prenom']}</td>
                <td>{$row['age']}</td>
                <td>
                    <a href='modifier.php?id={$row['id']}'>Modifier</a> |
                    <a href='supprimer.php?id={$row['id']}' onclick='return confirm(\"Supprimer cet étudiant ?\");'>Supprimer</a>
                </td>
              </tr>";
    }
    ?>
</table>

<p><a href="formulaire.php">Ajouter un nouvel étudiant</a></p>

</body>
</html>
