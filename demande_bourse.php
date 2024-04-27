<!doctype html>
<html lang="en">
  <head>
    <title>Sama Bourse</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="/bootstrap/css/bootstrap.css"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-grid.css">
    <script src="/bootstrap/js/bootstrap.bundle.js"></script>
    
    </head>
    <body>

 <!-- Autres éléments de la page de demande de bourse -->
 <style>
    /* Styles généraux */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
}

/* Styles spécifiques à l'espace utilisateur */
.user-profile {
    text-align: center;
    margin-bottom: 30px;
}

.user-profile img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
}

.user-profile h2 {
    margin-bottom: 5px;
    color: #333;
}

.user-profile p {
    color: #666;
}

.user-actions {
    text-align: center;
    margin-bottom: 30px;
}

.user-actions .btn {
    margin-right: 10px;
}

.user-info {
    margin-bottom: 30px;
}

.user-info h3 {
    margin-bottom: 10px;
    color: #333;
}

.user-info p {
    color: #666;
}


        .container {
            margin: 50px auto;
            max-width: 800px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            display: inline-block;
            padding: 8px 16px;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Demande de bourse</h1>
        
        <form action="traitement_demande.php" method="POST">
            <table class="table">
                <thead>
                    <tr>
                        <th>Catégorie de bourse</th>
                        <th>Montant</th>
                        <th>Choix</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bourse Entier</td>
                        <td>80000 fcfa</td>
                        <td>
                            <input type="radio"  name="type_bourse" value="80000" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Demi Bourse</td>
                        <td>40000 fcfa</td>
                        <td>
                            <input type="radio"  name="type_bourse" value="60000" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Bourse Partielle</td>
                        <td>20000 fcfa</td>
                        <td>
                            <input type="radio"  name="type_bourse" value="20000" required>
                        </td>
                    </tr>
                    <!-- Ajoutez d'autres catégories de bourses avec leurs montants et champs de sélection ici -->
                </tbody>
            </table>
            
            <!-- Personal Information Fields -->
            <h2>Informations personnelles</h2>
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" placeholder="Votre Nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre Prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Votre mail" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone:</label>
                <input type="tel" id="telephone" name="telephone" placeholder="Votre numero de telephone" required>
            </div>
            <div class="form-group">
                 <label for="mention">Mention :</label>
                <select id="mention" name="mention" required>
                <option value="">Sélectionnez une mention</option>
                <option value="Très bien">Tres bien</option>
                <option value="Bien">Bien</option>
                <option value="Assez bien">Assez bien</option>
                <option value="Passable">Passable</option>
                </select>
            </div>

            
            <button type="submit" class="btn btn-primary">Soumettre la demande</button>
        </form>
    </div>

    <div class="faq-container">
    <h2>FAQ - Foire aux questions</h2>
    
    <div class="faq-question">
        <h3>Q : Quelles sont les types de bourses disponibles ?</h3>
        <p>R : Nous offrons trois types de bourses : bourse entière, demi-bourse et autre bourse. Veuillez sélectionner le type qui correspond à votre situation.</p>
    </div>
    
    <div class="faq-question">
        <h3>Q : Comment savoir si je suis éligible à une bourse entière ?</h3>
        <p>R : La bourse entière est accordée aux étudiants ayant obtenu une mention Très Bien au baccalauréat. Vérifiez votre relevé de notes du bac pour connaître votre mention. Si vous avez obtenu Très Bien, vous pouvez faire une demande de bourse entière.</p>
    </div>
    
    <div class="faq-question">
        <h3>Q : Quels critères sont pris en compte pour une demi-bourse ?</h3>
        <p>R : La demi-bourse est accordée aux étudiants ayant obtenu une mention Bien au baccalauréat. Si vous avez obtenu Bien, vous pouvez faire une demande de demi-bourse.</p>
    </div>
    
    <div class="faq-question">
        <h3>Q : Que signifie "bourse partielle" ?</h3>
        <p>R : L'option "bourse partielle" est destinée aux étudiants qui ne sont pas éligibles aux bourses entière ou demi-bourse, mais qui ont d'autres circonstances particulières qui pourraient justifier une aide financière. Si vous pensez être éligible à ce type de bourse, sélectionnez cette option.</p>
    </div>
    
    <div class="faq-question">
        <h3>Q : Comment puis-je soumettre ma demande de bourse ?</h3>
        <p>R : Une fois que vous avez sélectionné le type de bourse correspondant à votre situation, cliquez sur le bouton "Soumettre la demande". Vous serez redirigé dans votre espace personnelle.</p>
    </div>
    
    <div class="faq-question">
        <h3>Q : Quand saurai-je si ma demande de bourse a été acceptée ?</h3>
        <p>R : Nous traitons les demandes de bourses dans l'ordre de réussite au bac et en fonction des critères d'éligibilité. Vous recevrez une notification par email dans les X jours suivant votre demande pour vous informer de la décision.</p>
    </div>
    
    <div class="faq-question">
        <h3>Q : Si ma demande de bourse est acceptée, comment recevrai-je ma bourse ?</h3>
        <p>R : Si votre demande de bourse est acceptée, les fonds seront généralement versés directement sur votre compte bancaire. Vous recevrez des instructions détaillées sur la procédure de paiement  sur le numero de votre telephone portable .</p>
    </div>
    

</div>

<style>
   
    .faq-container {
        background-color: #f1f1f1;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
    
    .faq-question {
        margin-bottom: 20px;
    }
    
    .faq-question h3 {
        color: #4e6bff;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .faq-question p {
        color: #666;
        font-size: 16px;
        line-height: 1.5;
    }
    
</style>
<!-- Autres éléments de la page de demande de bourse -->
 <!-- Ajoutez les liens vers les fichiers JavaScript de Bootstrap -->
        <script src="/bootstrap/js/bootstrap.esm.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/bootstrap/js/bootstrap.js"></script>
    </div>
  </body>
</html>