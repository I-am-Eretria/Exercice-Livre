<h1>Exerices POO PHP</h1>
<h2>Partie I: Livre</h2>

<br>

<h3>Consignes:</h3>
<p>
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et 
leurs auteurs respectifs. <br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un 
auteur. <br>
Un auteur comporte un nom et un prénom. <br>
Une méthode toString() sera appréciée dans chacune de vos classes. <br></p>

<p>Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie 
complète d’un auteur :</p>

<h4>Livres de Stephen King</h4>
<ul>
    <li>Ca (1986) : 1138 pages / 20€ </li>
    <li>Simetierre (1983) : 374 pages / 15€ </li>
    <li>Le Fléau (1978) : 823 pages / 14€ </li>
    <li>Shining (1977) : 447 pages / 26€ </li>
</ul>

<h3>Résultats:</h3>

<?php

//autochargement de classes php
spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});



$stephenKing = new Auteur("Stephen", "King");


$ca = new Livre("Ca", 1986, 1138, 20, $stephenKing);
$simetierre = new Livre("Simetierre", 1983, 374, 15, $stephenKing);
$leFleau = new Livre("Le Fléau", 1978, 823, 14, $stephenKing);
$shining = new Livre("Shining", 1977, 447, 26, $stephenKing);



echo $stephenKing->afficherBibliographie();

