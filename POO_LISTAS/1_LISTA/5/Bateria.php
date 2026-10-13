<?php
class Bateria {
    public $tipo;
    public $marca;
    public $qntPratos;


    public function definirDados ($tipo, $marca){
        $this->tipo = $tipo;
        $this -> marca = $marca;
        $this-> qntPratos=1;
    }


    public function tocar() {
        echo "Bateria do tipo " . $this->tipo;
        echo ", da marca " . $this->marca;
        echo " está tocando o terror!! \n BAM DUM TSSSSSSSSSS! \n\n";
    }


    public function maisPratos (){
        $this->qntPratos=$this->qntPratos+1;
    }
}
