<?php

$bdd = new PDO('mysql:host=localhost;dbname=maisondesligues;charset=utf8', 'root', '');
$affiche = ("SELECT * FROM formation");
