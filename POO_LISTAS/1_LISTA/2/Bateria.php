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


//OBJETO1
$bateria1 = new Bateria();
//ATRIBUTOS1
$bateria1->tipo = "Acústica";
$bateria1->marca = "Yamaha";
//MÉTODOS1
$bateria1->tocar();

//OBJETO2
$bateria2 = new Bateria();
//ATRIBUTOS2
$bateria2->tipo = "Eletrônica";
$bateria2->marca = "Yamaha";
//MÉTODOS2
$bateria2->tocar();

//OBJETO3
$bateria3 = new Bateria();
//ATRIBUTOS3
$bateria3->tipo = "Acústica";
$bateria3->marca = "Ludwing";
//MÉTODOS3
$bateria3->tocar();

