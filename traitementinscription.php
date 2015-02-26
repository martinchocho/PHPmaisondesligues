<?php



function inscription()
{
	$email=(htmlspecialchars($_POST['email']));
	$mdp=md5((htmlspecialchars($_POST['mdp'])));
	require_once 'connexion.php';
	$reponse = $bdd->query("INSERT INTO users (email,mdp,credit) VALUES ('$email','$mdp',10)");
	$reponse->closeCursor();
	header('Location:index.php');
}
inscription();