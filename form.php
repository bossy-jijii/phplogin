<?php
include("connection.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['message']))
{
    if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['phone']) and !empty($_POST['message']))
    {
        $sql1 = "SELECT * FROM contact WHERE email='".$_POST['email']."'";
        $reponse = $bdd->query($sql1);
        $donnees = $reponse->fetch_assoc();

        if(empty($donnees))
        {   
            $sql2 = "INSERT INTO contact (name, email, phone, message) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";
            $bdd->query($sql2);

            echo "<center>Formulaire de ".$_POST['name']." est envoyé avec succés!</center>";
        }
        else
        {
            echo "<center> Utilisateur ".$_POST['name']." a déjà envoyé un formulaire !!!</center>";
            echo "<script>alert('Merci d\'attendre notre réponse!');</script>";
        }
    } 
}
?>
