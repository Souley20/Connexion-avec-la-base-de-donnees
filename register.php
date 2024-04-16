<!DOCTYPE html>
 <html lang="en">
<head>
  <title>Mon site</title>
</head>
<body>
   <h2>Inscription</h2>       
  <form action="register.php" method="POST">
    <label for="name">Nom :</label>
    <input type="text" name="name" required><br><br>
    <label for="name">Prénom :</label>
    <input type="text" name="prénom" required><br><br>
    <label for="email">Adresse email :</label>
    <input type="email" name="email" required><br><br>
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required><br><br>
      <label for="name">Adresse :</label>
      <input type="text" name="adresse" required><br><br>
      <label for="name">Téléphone :</label>
      <input type="text" name="téléphone" required><br><br>
    <input type="submit" value="S’inscrire">   
  </form>
  <h3>Déjà inscrit ? <a href="login.php">Connexion</a></h3>
</body>
</html>

  <?php
include 'ajoute.php';

  $mysqli = new Mysqli("localhost", "root", "", "ProjetAuthentificationBDD");

  $résultat = $mysqli->query('SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled');

  echo '<table border="5"> <tr>';
  while($colonne = $résultat->fetch_field())
  {          
      echo '<th>' . $colonne->name . '</th>';
  }
  echo "</tr>";

  while ($ligne = $résultat->fetch_assoc())
  {
      echo '<tr>';
      foreach ($ligne as $indice => $information)
      {
          echo '<td>' . $information . '</td>';
      }
      echo '</tr>';
  }
  echo '</table>';
  ?>  