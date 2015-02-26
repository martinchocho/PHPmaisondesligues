<?php 
$title="Page de connexion";
require_once 'top.php';
?> 
 <div id="tout"><div id="logo">
  <img src="img/logom2l.png"/>
  </div>
  <div>
  <h1 id="titre">Page de connexion</h1>
  </div>
  <div id="main">
  <form action="traitement.php" method="post">
 <div id="champtexte"><label for="email">Email :</label><input placeholder="Votre email" type="text" name="email" id="email" /></div>
 <br>
 <div id="champtexte"><label for="mdp">Mot de passe :</label><input placeholder="Votre mot de passe" type="password" name="mdp" id="mdp" /></div>
 <p><input type="submit" value="connexion"></p>
</div>
<div id="info"><a href="inscription.php">Vous n'etes pas inscrit ?</a></div>
 </form>
 </div>
 </body>
</html>