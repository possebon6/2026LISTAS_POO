<?php
class TimeFutebol {
    private $nome;
    private $cidade;
    private $equipeBase;

    public function __construct($nome, $cidade, $equipeBase){
        $this->nome = $nome;
        $this ->cidade = $cidade;
        $this -> equipeBase = $equipeBase; 
    }

    public function getNome (){
        return $this ->nome;
        }
    public function setNome ($nome){
            $this -> nome = $nome;
        }

    public function getCidade () {
        return $this -> cidade;
    }
    public function setCidade ($cidade){
        $this -> cidade = $cidade;
    }

    public function getEquipeBase () {
        return $this -> equipeBase;
        }
    public function setEquipeBase ($equipeBase){
        $this -> equipeBase = $equipeBase;
    }

    public function verBase (){
        if ($this->equipeBase) {
            return "Possui sim.";
        } else {
            return "Nop!";
        }
    }
    }