<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire Étudiant</title>
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

.form {
  display: flex;
  flex-direction: column;
  gap: 1rem;
  width: 100%;
  max-width: 320px;
  background-color: #2c2c2c;
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: 0 0 15px rgba(0,0,0,0.4);
}

.form .input-span {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.form input[type="text"],
.form input[type="number"] {
  border-radius: 0.5rem;
  padding: 1rem 0.2rem;
  width: 100%;
  border: none;
  background-color: rgba(255,255,255,0.1);
  outline: 2px solid rgb(109,59,46);
  color: #fff;
}

.form input[type="text"]:focus,
.form input[type="number"]:focus {
  outline: 2px solid rgb(109,59,46);
}

.label {
  color: rgb(109,59,46);
  font-weight: 600;
}

/* Bouton centré */
.form .submit {
  padding: 1rem 2rem;
  width: auto;
  align-self: center;
  border-radius: 0.9rem;
  background-color: rgb(109,59,46);
  color: #fff;
  border: none;
  cursor: pointer;
  margin-top: 20px;
  transition: all 0.3s;
  font-weight: 900;
}

.form .submit:hover {
  background-color: #fff;
  color: rgb(109,59,46);
  
}

/* Lien centré sous le formulaire */
p {
  text-align: center;
}

p a {
  display: inline-block;
  margin-top: 20px;
  padding: 0.75rem 1.5rem;
  background-color: rgb(109,59,46);
  color: #fff;
  border-radius: 0.9rem;
  text-decoration: none;
  transition: all 0.3s ease;
}

p a:hover {
  background-color: #fff;
  color: rgb(109,59,46);
  font-weight: 900;
}
</style>
</head>
<body>

<header>
    <img src="logo_esto.png" alt="Logo ESTO">
</header>

<h2>Formulaire d’ajout d’un étudiant</h2>

<form class="form" action="ajouter.php" method="POST">
    <div class="input-span">
        <label class="label">Nom :</label>
        <input type="text" name="nom" required>
    </div>

    <div class="input-span">
        <label class="label">Prénom :</label>
        <input type="text" name="prenom" required>
    </div>

    <div class="input-span">
        <label class="label">Âge :</label>
        <input type="number" name="age">
    </div>

    <input class="submit" type="submit" value="Ajouter">
</form>

<p><a href="liste.php">Voir la liste des étudiants</a></p>

</body>
</html>
