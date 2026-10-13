<?php

require_once __DIR__."/TimeFutebol.php";

$time1=new TimeFutebol("Kidermann", "Caçador", TimeFutebol::STATUS_ATIVO);
$time2=new TimeFutebol("Tapejara", "Tapejara", TimeFutebol::STATUS_CRIANDO);
$time3=new TimeFutebol("Palmeiras", "São Paulo", TimeFutebol::STATUS_DESATIVADO);

//VERIFICAR 
echo"<h3>NOMES</h3><br>";
echo $time1 ->getNome()." - " . ($time1 -> verificarNome($time1 ->getNome())? "OK" : "ERRO"). "<br>";
echo $time2 ->getNome()." - " . ($time2 -> verificarNome($time2 ->getNome())? "OK" : "ERRO"). "<br>";
echo $time3 ->getNome()." - " . ($time3 -> verificarNome($time3 ->getNome())? "OK" : "ERRO"). "<br>";

echo "<h3>STATUS</h3><br>";
echo $time1 -> getNome(). " - ". $time1 -> getStatus(). "<br>";
echo $time2 -> getNome(). " - ". $time2 -> getStatus(). "<br>";
echo $time3 -> getNome(). " - ". $time3 -> getStatus(). "<br>";

//CONTADOR
echo "<h3>TOTAL DE TIMES: </h3>". TimeFutebol::$contador. "<br>";

echo "===== FIM =====";

?>
