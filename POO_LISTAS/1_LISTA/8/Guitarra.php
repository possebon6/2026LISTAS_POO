<?php
class Guitarra
{
private $marca;
private $modelo;


public function getMarca() {
return $this->marca;
}
public function setMarca ($marca){
$this->marca=$marca;
}
public function getModelo(){
return $this->modelo;
}
public function setModelo($modelo){
$this->modelo=$modelo;
}


public function definirDados ($marca, $modelo) {
$this -> setMarca ($marca);
$this -> setModelo ($modelo);
}


public function tocar() {
			echo "\n Guitarra da marca ". $this->marca;
			echo ", modelo ". $this->modelo;
			echo ". \n Saca o som! GRRRRRR!";
}
}
