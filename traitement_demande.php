<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $typeBourse = $_POST['type_bourse'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mention = $_POST['mention'];

    // Connect to the database (replace with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bourses";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the user has already submitted a request
    $existingRequestQuery = "SELECT id FROM demande_bourses WHERE email = '$email' LIMIT 1";
    $existingRequestResult = $conn->query($existingRequestQuery);
    if ($existingRequestResult && $existingRequestResult->num_rows > 0) {
        echo "Vous avez déjà soumis une demande de bourse.";
        session_destroy(); // Fermer la session
        exit();
    }

    // Prepare and execute the SQL query to insert the data into the database
    $insertQuery = "INSERT INTO demande_bourses (type_bourse, nom, prenom, email, telephone, mention) VALUES ('$typeBourse', '$nom', '$prenom', '$email', '$telephone', '$mention')";

    if ($conn->query($insertQuery) === TRUE) {
        echo "Demande enregistrée avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement de la demande: " . $conn->error;
    }

    $conn->close();
    header('location:landing.php'); // Rediriger vers la page personnelle
    exit();
}

?>