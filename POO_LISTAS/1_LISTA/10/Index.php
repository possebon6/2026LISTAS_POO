<?php

require_once __DIR__ . '/Bateria.php';
require_once __DIR__ . '/Guitarra.php';

// objetos com o obrigatório
$bateria1 = new Bateria("Acústica");
//objeto com tudo
$bateria2= new Bateria("Acústica", "Pearl");

//objetos com o obrigatório
$guitarra1 = new Guitarra("Fender");
//objeto com tudo
$guitarra2 = new Guitarra("Epiphone", "SG");

// tocar
$bateria1->tocar();
$bateria2->tocar();
$guitarra1->tocar();
$guitarra2->tocar();

