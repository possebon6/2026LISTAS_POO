<?php
class Bateria {
    public $tipo;
    public $marca;


    public function definirDados ($tipo, $marca){
        $this->tipo = $tipo;
        $this -> marca = $marca;
    }


    public function tocar() {
        echo "Bateria do tipo " . $this->tipo;
        echo ", da marca " . $this->marca;
        echo " está tocando o terror!! \n BAM DUM TSSSSSSSSSS! \n\n";
    }
}


//objeto
    $bateria1 = new Bateria();
//método definirDados, que tem os atributos
    $bateria1->definirDados("Acústica", "Tona");
//método tocar
    $bateria1->tocar();


?>
