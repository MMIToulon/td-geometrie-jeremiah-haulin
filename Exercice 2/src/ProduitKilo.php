<?php 

    require_once('Produit.php');


    class ProduitKilo extends Produit
    {

        private $prixKilo = 0;
        
        private $poids = 0;

        private static $instanceK = 0;

        
    	public function __construct($PrixK,$Poids)
        {
            echo "<br>Creation d'un produit";
            parent::__construct();
            self::$instanceK++;
            $this->prixKilo = $PrixK;
            $this->poids = $Poids;
        }
        
     	public function __toString()
        {
            $text = "<hr> Produit ".
                    "<br> Prix au kilo :".$this->prixKilo.
                    "<br> Poids de produit : ".$this->poids."<hr>";
            return $text;
        }

        public static function nbInstance()
        {
            echo "<br><br>";
            return self::$instanceK;
        }
      


      

        
    //ACCESSEURS

    	public function setPrix($Prix)
    	{
    	  $this->prixKilo = $Prix;
    	}

    	public function setKilo($Kilo)
    	{
    	  $this->poids = $Kilo;
    	}
      

        public function Calculer()
        {
            echo "<br><br>";
            return ($this->poids*$this->prixKilo);
        }
    }

?>