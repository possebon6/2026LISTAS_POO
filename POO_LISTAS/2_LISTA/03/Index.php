<?php                                                              
                                                                   
                                                                   
require_once __DIR__ .'/TimeFutebol.php';      
require_once __DIR__ .'/CamisetaFut.php';                    
                                                                   
                                                                   
//objetos                                                          
$time1 = new TimeFutebol("Kindermann","Caçador", true, 90);            
$time2 = new TimeFutebol("Tapejara","Tapejara", true, 80);             
$time3 = new TimeFutebol("Palmeiras","São Paulo", false, 47);   

echo "Nro camisetas vendidas: ". TimeFutebol::$camisetasVendidas;
echo "<br><br>";
echo "Quantidade de times que temos camisetas disponíveis: ". TimeFutebol::$contador;





























?>                                                                 
                                                                   
                                                                   
                                                                   
                                                                   