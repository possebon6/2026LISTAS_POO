<?php
class TimeFutebol {
    public $nome;
    public $cidade;
    public $equipeBase;

    public static $contador = 0;
public static $camisetasVendidas = 0;

const TAM_MIN_NOME=3;
    public function __construct($nome, $cidade, $equipeBase, $camisetas) {
        $this->nome = $nome;
        $this ->cidade = $cidade;
        $this -> equipeBase = $equipeBase; 
        self::$contador++;
        self::$camisetasVendidas+=$camisetas;
        
    }

    public function checarNome() {
        return strlen($this->nome)>self::TAM_MIN_NOME;
}
}
?>

























