<?php
	require_once __DIR__ .’/Bateria.php’;


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
