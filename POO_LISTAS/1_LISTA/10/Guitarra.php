<?php
class Guitarra
{
private $marca;
private $modelo;

public function __construct($marca, $modelo = ""){
	$this->marca = $marca;
	$this->modelo = $modelo;
}


public function tocar() {
			echo "\n Guitarra da marca ". $this->marca;
			echo " - " .$this -> modelo;
			echo ". \n Saca o som! GRRRRRR!";
}
}
