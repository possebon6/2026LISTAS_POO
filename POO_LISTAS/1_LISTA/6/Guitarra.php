<?php
	class Guitarra {
		public $marca;
		public $modelo;


public function definirDados ($marca, $modelo){
			$this->marca =$marca;
			$this->modelo=$modelo;
		}


public function tocar (){
			echo "\n Guitarra da marca ". $this->marca;
			echo ", modelo ". $this->modelo;
			echo ". \n Saca o som! GRRRRRR!";
		}
	}
