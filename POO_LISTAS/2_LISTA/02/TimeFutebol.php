<?php
class TimeFutebol {
    private $nome;
    private $cidade;
    private $equipeBase;

    
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
}
?>

























