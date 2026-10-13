<?php
class Bateria
{
private $tipo;
private $marca;


public function getTipo() {
return $this->tipo;
}
public function setTipo ($tipo){
$this->tipo=$tipo;
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
echo "Bateria do tipo " . $this->tipo;
		echo ", da marca " . $this->marca;
		echo " está tocando o terror!! \n BAM DUM TSSSSSSSSSS! \n\n";
}
}
