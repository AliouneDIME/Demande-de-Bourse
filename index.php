<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="bourse.css">
   
            <title>Connexion</title>
        </head>
        <body>
        
        <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
             <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
            
            <form action="connexion.php" method="POST" class="sign-in-form">
                    <h2 class="title">Page de connexion</h2>
                    <div class="input-field">
                       <i class="fas fa-envelope"></i>
                       <input type="text" placeholder="Adresse email" id="email" name="email">
                    </div>

                    <div class="input-field">
                       <i class="fas fa-lock"></i>
                       <input type="password" placeholder="Mot de Passe" id="password " name="password">
                    </div>

                    <input type="submit" value="SE CONNECTER" class="btn solid"><br>
                    <a href="#" class="social-container">Mot de passe oublié<i class="fas fa-question"></i></a>
                    <p id="error-message"></p> <!-- Nouvel élément pour afficher les messages d'erreur -->
               </form>


                <form action="inscription_traitement.php" method="POST" class="sign-up-form">
                  <h2>Créer un nouveau compte</h2>
                    <div class="input-field">
                      <i class="fas fa-user-alt"></i> 
                      <input type="text" placeholder="Votre prénom *" name="prenom">
                    </div> 

                    <div class="input-field">
                      <i class="fas fa-user-friends"></i> 
                      <input type="text" placeholder="Votre nom de famille *" name="nom">
                    </div>
                    <div class="input-field">
                      <i class="fas fa-envelope"></i> 
                      <input type="text" placeholder="email *" name="email">
                    </div> 

                    <div class="input-field">
                      <i class="fas fa-lock"></i> 
                      <input id="password" placeholder="Password *"name="password" auto_>
                    </div> 
                    <div class="input-field">
                      <i class="fas fa-lock"></i> 
                      <input id="password" placeholder=" Retaper Password *"name="password_retype">
                    </div> 
                    <input type="submit" value="S'inscrire" class="btn">
                </form>
            </div>
       </div>
       <div class="panels-container">

<div class="panel left-panel">
    <div class="content">
      <h3>C'est votre premiére fois ici ?</h3>
      <p>Cliquez sur le button s'inscrire!</p>
      
       <a href="inscription.php"> S'INSCRIRE</a>
     
    </div>
    <img src="img/log.svg" class="image" alt="" />
  </div>

  <div class="panel right-panel">
    <div class="content">
      <h3>Vous avez déjà votre compte ?</h3>
      <p>Cliquez sur le bouton !</p>
      <button class="btn transparent" id="sign-in-btn">
        SE CONNECTER
      </button>
    </div>
    <img src="img/register.svg" class="image" alt="" />
  </div>

</div>

</div>
</div>

<script src="bourse.js"></script>
        </body>
</html>