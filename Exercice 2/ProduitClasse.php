<?php 

	abstract class Produit 
	{

	    abstract function CalculerUnite($poids,$prixUnite)
	    {
	        $this->poids = $poids;
	        $this->prixUnite = $prixUnite;
	        return $poids*$prixUnite;
	    }

	}

?>