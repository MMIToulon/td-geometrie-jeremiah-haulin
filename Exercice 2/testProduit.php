<?php
    // INSTANCIATION OBJETS

	// C'est un fichier qui test toutes les méthodes de la classe une par une

	// Pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// Inclure le fichier contenant la définition de la classe
	require_once("src/Produit.php");
	require_once("src/ProduitKilo.php");
	require_once("src/ProduitUnit.php");

	// Instanciation
	$PK = new ProduitKilo(10, 50);
 	$PU = new ProduitUnit(16, 70);

	// Instanciation
	$PK2 = new ProduitKilo(10, 50);
 	$PU2 = new ProduitUnit(16, 70);

	// Instanciation
	$PK3 = new ProduitKilo(10, 50);
 	$PU4 = new ProduitUnit(16, 70);

    echo $PK;
    echo $PU;

    $PK->setPrix(6);

    echo $PK->Calculer()."€";
    echo $PU->Calculer()."€";
    

    $PK->setPrix(6);
    $PK->setKilo(50);
    $PU->setPrix(9);
    $PU->setNombre(45);


    echo $PK;
    echo $PU;

    echo $PK->Calculer()."€";
    echo $PU->Calculer()."€";


    echo Produit::nbInstance()." produits ont été créés.";
    echo "<br>Dont ".ProduitKilo::nbInstance()." produit au kilo.";
    echo "<br>Et ".ProduitUnit::nbInstance()." produit à l'unité.";

?>