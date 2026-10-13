<?php                                                              
                                                                                                                                  
require_once __DIR__ .'/TimeFutebol.php';      
                                                                            
//objetos                                                          
$time1 = new TimeFutebol("Kindermann","Caçador", true, 100);            
$time2 = new TimeFutebol("Tapejara","Tapejara", true, 200);             
$time3 = new TimeFutebol("Palmeiras","São Paulo", false, 50);   

echo "Eis o time: ". $time1 -> nome;
echo "<br><br>";

echo "Temos agora ". TimeFutebol::$contador;
echo " times. Com isso, vendemos ". TimeFutebol::$camisetasVendidas;
echo " camisetas.";

?>                                                                 
                                                                   
                                                                   
                                                                   
                                                                   