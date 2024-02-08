<?php
session_start(); // "premiere instruction; pas de texte, ; entete de communication"

// il faut etre connecter

// Utilisez include si la non-disponibilité de inc_headers.php n'est pas critique
include('includes/inc_headers.php');

// Récupérer les informations depuis les paramètres d'URL
$loginUtilisateur = $_SESSION["login"];
//$codePartie = isset($_GET['code']) ? $_GET['code'] : '';

// Récupérer le code unique depuis l'URL
$code_unique = isset($_GET['code']) ? $_GET['code'] : '';

// Afficher le code unique
echo "Votre code unique est : $code_unique";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Jeu</title>
</head>
<body>
    <div class="container">
    <h1><center>Bienvenue sur la partie de jeu de DiceArena !</center></h1>
    <!-- <p>Merci de vous identifier pour accéder à l'application.</p> -->
    <!-- Affichage du message d'erreur -->
    <!-- Code saisit invalide | pseudo deja empreinter | -->
    <div>
        <label for="cdPartie">Code de la partie : </label>
        
        <label >
    </div>
    <div>
        <label for="inCreator">Pseudo createur: </label>
        <input class="form-control" id="inCreator" name="Creator" type="text" placeholder="identifiant createur">
        <button class="btn btn-primary" type="submit" id="btnCreate">Creation</button>
        
    </div>
    <div>
        <label for="inJoiner">Pseudo joueur 2 : </label>
        <input class="form-control" id="inJoiner" name="Joiner" type="text" placeholder="Veuilliez saisir le code de la partie">
        <button class="btn btn-warning" type="reset" id="btnJoin" action>Rejoindre</button>
    </div>
    </div>
</body>
</html>
