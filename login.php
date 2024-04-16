<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>    
      <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TRT Conseil <p class="text-white">Agence de recrutement</p></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Mon compte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Connexion</a>
              </li>              
            </ul>         
          </div>           
        </div>
      </nav>    
    <section><br><br>
    <form class="offset-lg-3 col-lg-3 container mt-4" action="loginPost.php" method="POST">
        <!-- EMAIL -->
        <label for="email" class="col-xs--12">Adresse email :</label>
        <input type="email" class="form-control" id="EmaildInput" name="email" required /><br>

        <!-- PASSWORD -->
        <label for="password">Mot de passe :</label>
        <input type="password" class="form-control" id="PasswordInput" name="password" required /><br>

            <!-- BUTTON -->        
        <input type="submit" value="Se connecter" <a href="loginPost.php"></a>
    </form><br><br>
    <label class="offset-lg-3 col-lg-3">Pas encore incrit ?<a type="submit" href="register.php">Inscrivez-vous</a></label><br><br><br>
         <footer class="bg-dark text-white text-center footer">
                                   <div class="row">
                                       <div class="col-12 col-lg-4">
                                           <h3> Nos horaires</h3>
                                           <p>Du lundi au samedi 08:00-12:30 13:30-17:00</p>
                                       </div>
                                       <div class="col-6 col-lg-4">
                                           <p>TRT Conseil<br />
                                               15 Avenue de la grotte <br />
                                               32142 Saint-Ville <br />
                                               04 02 02 02 02 <br />
                                               ©2024 Tous Droits Réservés | © TRT Conseil<br />
                                           </p>
                                       </div>
                                       <div class="col-6 col-lg-4">
                                           <p>trtconseil@contact.com</p>
                                       </div>
                                   </div>
                               </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
</body>
</html>