<?php
require('db.php');    

// Si l'utilisateur est connecté, on récupère son identité via la session.

if(isset($_POST['titre']) && isset($_POST['contenu'])){
    $titre=$_POST['titre']; # <--- Permet de récupérer la saisie du champ Input "Titre"
    $contenu=$_POST['contenu']; # <--- Permet de récupérer la saisie du champ Input "Contenu"
    $requete = $bdd->prepare("INSERT INTO article(titre, contenu) VALUES(?, ?)");
    $requete->execute(array($titre ,$contenu));
    }

header('Location:index.php');
exit();
?>