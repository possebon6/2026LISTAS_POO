<?php

require_once __DIR__."/TimeFutebol.php";

$time1=new TimeFutebol();
$time1 -> nome = "Kidermann";
$time1 -> cidade = "Caçador";
$time1 -> status = TimeFutebol::STATUS_ATIVO;

$time2 =new TimeFutebol();                    
$time2 -> nome = "Tapejara";                
$time2 -> cidade = "Tapejara";                
$time2 -> status = TimeFutebol::STATUS_CRIANDO;

$time3 =new TimeFutebol();                    
$time3 -> nome = "Palmeiras";                
$time3 -> cidade = "São Paulo";                
$time3 -> status = TimeFutebol::STATUS_DESATIVADO;

echo "Time 1: ". $time1 -> nome ." - ". $time1 -> status;
echo "<br>";
echo " Time 2: ". $time2 -> nome ." - ". $time2 -> status;
echo "<br>";
echo " Time 3: ". $time3 -> nome ." - ". $time3 -> status;

echo ". === FIM DA LISTA ===";

?>
