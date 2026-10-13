<?php
class Bateria
{
private $tipo;
private $marca;


public function getTipo() {
return $this->tipo;
}
public function setTipo($tipo) {
    if ($tipo == "Eletrônica" || $tipo == "Acústica") {
        $this->tipo = $tipo;
    } else {
        echo "Erro: o tipo deve ser Eletrônica ou Acústica!\n";
    }
}
public function getMarca(){
return $this->marca;
}
public function setMarca($marca){
$this->marca=$marca;
}


public function definirDados ($tipo, $marca) {
$this -> setTipo ($tipo);
$this -> setMarca ($marca);
}


public function tocar() {
 if ($this->tipo == "Eletrônica" || $this->tipo == "Acústica") {
        echo "Bateria do tipo " . $this->tipo;
        echo ", da marca " . $this->marca;
    } else {
        echo "Bateria da marca " . $this->marca;
    }

    echo " está tocando o terror!! \n";
    echo "BAM DUM TSSSSSSSSSS! \n\n";
}
}