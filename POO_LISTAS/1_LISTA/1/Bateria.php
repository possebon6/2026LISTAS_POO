<?php
class Bateria {
    public $tipo;
    public $marca;

    public function tocar (){
        echo "Bateria do tipo ".$this->tipo;
        echo ", da marca ". $this->marca;
        echo " está tocando o terror!! BAM DUM TSSSSS!";
    }
}

//OBJETO
$bateria1 = new Bateria();
//ATRIBUTOS
$bateria1->tipo = "Acústica";
$bateria1->marca = "Yamaha";
//MÉTODOS
$bateria1->tocar();
