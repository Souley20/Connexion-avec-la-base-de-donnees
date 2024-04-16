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
    <section>            
    <div class="container mt-4">                
        <ul>
            <p class="row align-items-start" style="height: 50px;" href="text">TRT Conseil est une agence de recrutement spécialisée dans l’hôtellerie et la restauration. Fondée en 2014, la société s’est agrandie au fil des ans et possède dorénavant plus de 12 centres dispersés aux quatre coins de la France.</p> <br />
            <p class="row align-items-start" style="height: 200px;" href="text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus nisl arcu, id ultrices libero dapibus sit amet. Nulla lobortis augue rhoncus magna dapibus, non convallis sem cursus. Curabitur porttitor tincidunt sem egestas egestas. Pellentesque porta varius est. Proin nec arcu ornare, malesuada libero fermentum, porta sapien. Fusce ac sapien id justo mattis finibus. Sed nec erat eu sem rutrum condimentum vel posuere ex. Suspendisse eget porta augue. Fusce urna velit, interdum ac mauris interdum, luctus dictum elit. Morbi cursus, sapien vel fermentum viverra, nisi lorem semper quam, vel fermentum arcu lectus nec massa. Fusce non tempus lectus, quis bibendum lorem. Vivamus ut enim volutpat, accumsan lectus nec, molestie eros.</p>
        </ul>
    </div>
    </section><br />
    <section>
            <div class="offset-lg-3 col-lg-3 container mt-4">
                <h2 <a href="#">Nous contacter</a></h2><br>
                <form action="loginPost.php" method="POST">
                  <label for="email" class="col-xs--12">Email</label>
                       <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                            <div id="email-help" class="form-text"></div>
                        </div><br>
                        <div class="offset-lg-3 col-xxl-1 col-lg-3 col-md-4 col-sn-6 container mt-4">
                            <label for="message" class="#">Votre message</label><br/>
                            <textarea class="form-control" placeholder="Exprimez vous" description="message"></textarea>
                        </div>
                </section>
                <section class="offset-lg-3 col-lg-3 container mt-4">
                        <button type="submit" class="btn-primary">Envoyer</button><br />                 
                </form>                
            </div>
            </section><br />    
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