
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php 

    abstract class Produit
    {
        protected static $instance = 0;

    	public function __construct()
        {
            self::$instance++;
        } 

        public static function nbInstance()
        {
            echo "<br><br>";
            return self::$instance;  
        }
      

        public abstract function Calculer();

        // public abstract function CalculerUnit();

        // public abstract function CalculerKilo();  
    }

?>