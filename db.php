<?php
try{ # <--- Affichage du message d'erreur en cas d'échec
            $bdd = new PDO('mysql:host=localhost;dbname=db-blog;charset=utf8', 'root', ''); #Connexion à la base de données PHPMyAdmin
            } catch(Exception $e) {
                echo"Une erreur est survenue." .$e->getMessage();
            }# <--- Méthode
?>