<?php
include("connexion.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajout Étudiant</title>
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

.container {
  background-color: #2c2c2c;
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: 0 0 15px rgba(0,0,0,0.4);
  text-align: center;
  max-width: 400px;
}

.message {
  margin-bottom: 20px;
  font-size: 1rem;
  font-weight: 500;
}

a {
  display: inline-block;
  margin: 10px;
  padding: 0.75rem 1.5rem;
  background-color: rgb(109,59,46);
  color: #fff;
  border-radius: 3rem;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
}

a:hover {
  background-color: #fff;
  color: rgb(109,59,46);
}
</style>
</head>
<body>

<header>
    <img src="logo_esto.png" alt="Logo ESTO">
</header>

<div class="container">
  <h2>Résultat de l’ajout</h2>

  <div class="message">
  <?php
  if (isset($_POST['nom']) && isset($_POST['prenom'])) {
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $age = $_POST['age'];

      $sql = "INSERT INTO etudiants (nom, prenom, age) VALUES ('$nom', '$prenom', '$age')";

      if (mysqli_query($conn ,$sql)) {
          echo "Étudiant ajouté avec succès !";
      } else {
          echo "Erreur : " . mysqli_error($conn);
      }
  } else {
      echo "Aucune donnée reçue.";
  }

  mysqli_close($conn);
  ?>
  </div>

  <a href="liste.php">Voir la liste</a>
  <a href="formulaire.php">Retour au formulaire</a>
</div>

</body>
</html>
