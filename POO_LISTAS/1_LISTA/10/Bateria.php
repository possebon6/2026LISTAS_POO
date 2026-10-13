<?php
class Bateria
{
private $tipo;
private $marca;


public function __construct($tipo, $marca = "") {
    $this->tipo = $tipo;
    $this->marca = $marca;
}
public function tocar() {
        echo "Bateria do tipo " . $this->tipo;
        echo " - " .$this -> marca;
    echo " está tocando o terror!! \n";
    echo "BAM DUM TSSSSSSSSSS! \n\n";
}
}