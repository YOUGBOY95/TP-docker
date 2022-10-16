<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Page de connexion</title>
</head>
<body>
    <div class="formulaire-de-connexion">
        <form action="" method="post">
            <input type="text" class="input-id" name="identifiant">
            <input type="password" class="input-password" name="motDePasse">
            <input type="submit"  class="bouton" value="Se connecter" name=connexion>
        </form>
    </div>
</body>

<?php
require('db.php');    
if(isset($_POST['identifiant']) && isset($_POST['motDePasse']))
    {
        $identifiant=$_POST['identifiant']; # <--- Permet de récupérer la saisie du champ Input "input-id"
        $motdepasse=$_POST['motDePasse']; # <--- Permet de récupérer la saisie du champ Input "input-password"
        $requete = $bdd->prepare("SELECT * FROM utilisateur WHERE nom=? AND motDePasse=? ");
        $requete->execute(array($identifiant , $motdepasse));
        $table=$requete->fetchAll();
        
        if(count($table) > 0)
            {
                header('Location:index.php');
                exit();
            }
        else 
            {
                echo "Identifiant ou Mot de passe incorrect. 
                <br> Veuillez essayer à nouveau.";
            }  
    }
?>
</html>