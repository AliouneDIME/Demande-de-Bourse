<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <title>Inscription</title>
            <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
            <script src="bootstrap/css/bootstrap.css"></script>
            <link rel="stylesheet" href="/bootstrap/css/bootstrap-grid.css">
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="bootstrap/js/bootstrap.js">     
           
              
        </head>
        <body>
        <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
            <?php 
                if(isset($_GET['reg_err']))     
                {
                    $err = htmlspecialchars($_GET['reg_err']);
        
                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email';
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'prenom_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> prenom trop long
                            </div>
                        <?php 
                         case 'nom_length':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> nom trop long
                                </div>
                            <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
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
            <img src="img/log.svg" class="image" alt="" />
       </div>
       <img src="img/register.svg" class="image" alt="" />
        </div>
        <script src="bourse.js"></script>
</body>
</html>
