<head>
    <meta charset="UTF-8" />
    <title>Récupération des saisies : profil.html</title>
</head>
<body>
<?php
// récupération des zones de saisie dans des variables locales
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];

//affichage
echo "Bonjour $prenom $nom <br>";


?>
