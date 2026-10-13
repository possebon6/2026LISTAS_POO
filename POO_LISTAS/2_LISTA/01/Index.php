<?php                                                              
                                                                   
                                                                   
require_once __DIR__ .'/TimeFutebol.php';                          
                                                                   
                                                                   
//objetos                                                          
$time1 = new TimeFutebol("Kindermann","Caçador", true);            
$time2 = new TimeFutebol("Tapejara","Tapejara", true);             
$time3 = new TimeFutebol("Palmeiras","São Paulo", false);   

echo "Total de times: ". TimeFutebol::$contador;



























?>                                                                 
                                                                   
                                                                   
                                                                   
                                                                   