<?php
require_once __DIR__ .'/Bateria.php';
require_once __DIR__ .'/Guitarra.php';


//objetos
	$bateria1 = new Bateria();
	$guitarra1 = new Guitarra();
//método definirDados, que tem os atributos
	$bateria1->definirDados("Acústica", "Cratamonho");
	$guitarra1 -> definirDados("Gibson", "Les Paul");
//método tocar
	$bateria1->tocar();
	$guitarra1->tocar();
