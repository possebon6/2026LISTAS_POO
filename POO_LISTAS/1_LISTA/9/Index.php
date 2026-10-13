<?php

require_once __DIR__ . '/Bateria.php';
require_once __DIR__ . '/Guitarra.php';

// objetos
$bateria1 = new Bateria("Acústica", "Bateção");
$guitarra1 = new Guitarra("Jaguar", "Fender");

// tocar
$bateria1->tocar();
$guitarra1->tocar();

