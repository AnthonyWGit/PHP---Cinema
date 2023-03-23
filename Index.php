<?php
//____________________________Includes_______________________
include 'Personne.php';
include 'Acteur.php';
include 'Role.php';
include 'Film.php';
include 'Casting.php';
include 'Realisateur.php';
include 'Genre.php';
//____________________________________________________________
$result ="";
//Instancier Real________________________________________________________
$zackSnyder = new Realisateur("Snyder","Zack", "homme", "1966");
$kevinCostnerR = new Realisateur("Costner", "Kevin", "homme", "1955");
$richarDonner = new Realisateur("Donner", "Richard", "homme", "1930");
//instancier Role_______________________________________________________
$superman = new Role("Superman");
$LtJohnJDunba = new Role (" Lt. John J. Dunba");
//instancier acteurs________________________________________________________________
$kevinCostnerA = new Acteur("Costner", "Kevin", "homme", "1955", $LtJohnJDunba);
$henryCavill = new Acteur("Cavill", "Henry", "homme", "1983", $superman);
$christopherReeves = new Acteur("Reeves", "Christopher", "homme", "1952", $superman);
//Instancier genres de film___________________________________________________________
$superHeros = new Genre("Super-Héros");
$western = new Genre("Western");
//instancier Films________________________________________________________________________________________________________________
$justiceLeague = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", $superHeros, $zackSnyder);
$justiceLeague5 = new Film("Justice League", "2017", 120, "Lorem Ipsum dolor sit amet consectetur adip", $superHeros, $zackSnyder);
$danseAvecLesloups = new Film("Danse avec les Loups", "1990", 181, "DDDDDDDDDDDOOOOOOOOOOOOOOOO", $western, $kevinCostnerR);
$supermanFilm = new Film("Superman", "1978", 143, "Lorem Ipsum dolor sit amert consectetur adip",$superHeros, $richarDonner);
//Instancier Casting__________________________________________________________________________________________________________________
$castingDanseAvecLesloups = new Casting($LtJohnJDunba, $danseAvecLesloups, $kevinCostnerA);
$castingJusticeLeague = new Casting($superman, $justiceLeague, $henryCavill);
$castingSuperman = new Casting($superman,$supermanFilm,$christopherReeves);
//Affichage___________________________________________________________________________________________________________________________
echo $justiceLeague->afficherReal();
echo $zackSnyder->afficherFilmo();
echo $henryCavill->afficherFilmoActeur();
echo $danseAvecLesloups->afficherCasting();
echo $superman->afficherActeurRole();
