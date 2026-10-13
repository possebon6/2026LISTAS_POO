<?php

require_once __DIR__ . '/Bateria.php';
require_once __DIR__ . '/Guitarra.php';

// objetos
$bateria1 = new Bateria();
$guitarra1 = new Guitarra();

// set bateria
$bateria1->setTipo('Azul');
$bateria1->setMarca('Philips');

// set guitarra
$guitarra1->setMarca('Divo');
$guitarra1->setModelo('Tacale');

// tocar
$bateria1->tocar();
$guitarra1->tocar();

