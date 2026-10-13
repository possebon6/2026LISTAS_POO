<?php
class TimeFutebol {
    public $nome;
    public $cidade;
    public $equipeBase;

    
    public static $contador = 0;

public static $camisetasVendidas = 0;
    ///
        public function __construct($nome, $cidade, $equipeBase, $camisetas) {
        $this->nome = $nome;
        $this ->cidade = $cidade;
        $this -> equipeBase = $equipeBase; 
        self::$contador++;
        self::$camisetasVendidas+=$camisetas;
        
    }

    //
    public static function novoTime(){
        echo "<br><br>" ;
        return new self (
            "Anônimo",
            "De qualquer lugar!",
            false,
            0
        );
    }
}
?>

























