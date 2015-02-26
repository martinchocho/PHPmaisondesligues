<?php


function validmdp()
{
	$email=(htmlspecialchars($_POST['email']));
	$mdp=md5((htmlspecialchars($_POST['mdp'])));
	require_once 'connexion.php';
	$reponse = $bdd->query("Select mdp from users where email='$email'");
	$donnees = $reponse->fetch();
	$reponse->closeCursor();
	if($mdp==$donnees['mdp'])
		header('Location:affichage.php');
	else
		header('Location:index.php');
}
validmdp();

