<?php
class TimeFutebol {
    private $nome;
    private $cidade;
    private $equipeBase;

    
    public static $contador = 0;
        public function __construct($nome, $cidade, $equipeBase){
        $this->nome = $nome;
        $this ->cidade = $cidade;
        $this -> equipeBase = $equipeBase; 
        self::$contador++;
    }
}
?>

























