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
<?php
$host = $_SERVER['HTTP_HOST'];
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
if ($_POST["login"]=="admin" && $_POST["mdp"]=="azerty") {
    $extra = 'profil.html';
    header("Location: http://$host$uri/$extra");
    exit;
}else{
    $extra = 'index.html';
    header("Location: http://$host$uri/$extra");
    exit;
}
?>
