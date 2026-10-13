<?php

require_once __DIR__."/TimeFutebol.php";

$time1=new TimeFutebol("Kidermann", "Caçador", TimeFutebol::STATUS_ATIVO);
$time2=new TimeFutebol("Tapejara", "Tapejara", TimeFutebol::STATUS_CRIANDO);
$time3=new TimeFutebol("Palmeiras", "São Paulo", TimeFutebol::STATUS_DESATIVADO);

//CONTADOR
echo "<h3>TOTAL DE TIMES: </h3>". TimeFutebol::$contador++ . "<br><br>";
echo "<br><br>". TimeFutebol::listar()."<br>";    

echo "===== FIM =====";

?>
