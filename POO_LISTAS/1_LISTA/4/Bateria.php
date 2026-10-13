

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


//objeto
    $bateria1 = new Bateria();
//método definirDados, que tem os atributos
    $bateria1->definirDados("Acústica", "Cratamonho");
//método qntPratos - antes, chamar, novo valor = maisPratos
    echo "Você compra com ". $bateria1->qntPratos. " prato. ";
   
    $bateria1 -> maisPratos();


    echo "E com 20 reais a mais, temos a opção com ". $bateria1->qntPratos ." pratos. Aproveite! \n";


//método tocar
    $bateria1->tocar();


?>
