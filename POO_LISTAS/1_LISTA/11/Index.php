<?php

require_once __DIR__ .'/TimeFutebol.php';

//objetos
$time1 = new TimeFutebol("Kindermann","Caçador", true);
$time2 = new TimeFutebol("Tapejara","Tapejara", true);
$time3 = new TimeFutebol("Palmeiras","São Paulo", false);

//aplicar
echo "O primeiro time informado é: ". $time1->getNome(); 
echo ", da cidade de ". $time1 ->getCidade(); 
echo ". E vocês possuem equipe base?" .($time1 -> getEquipeBase());
echo $time1 -> verBase();

echo "<br><br>";

//
echo "O segundo time informado é: ". $time2->getNome();           
echo ", da cidade de ". $time2 ->getCidade();                      
echo ". E vocês possuem equipe base?" .($time2 -> getEquipeBase());
echo $time2 -> verBase();                                          
                                                             
echo "<br><br>";     

//     
echo "O terceiro time informado é: ". $time3->getNome();           
echo ", da cidade de ". $time3 ->getCidade();                      
echo ". E vocês possuem equipe base?" .($time3 -> getEquipeBase());
echo $time3 -> verBase();                                          
                                                                   
?>
                                             

                                             