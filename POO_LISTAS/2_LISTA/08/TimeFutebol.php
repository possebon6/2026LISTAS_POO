<?php

class TimeFutebol {
    private $nome;
    private $cidade;
    private $status;

    const STATUS_ATIVO = "Tá ON!";
    const STATUS_CRIANDO = "Tamo indo...";
    const STATUS_DESATIVADO = "Já erax";

    const TAM_MIN_NOME = 3;

    public static $contador = 0;

    public function __construct($nome, $cidade, $status) {
        $this->nome = $nome;
        $this->cidade = $cidade;
        $this->status = $status;
        self::$contador++;
    }

    //NOME
    public function getNome() {
        return $this->nome;
    }
    public function setNome ($nome){
        $this->nome = $nome; }
public function verificarNome($nome){
    return strlen($nome) >= self::TAM_MIN_NOME;
    }

    //CIDADE
    public function getCidade() {
        return $this->cidade;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    //STATUS
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = self::validarStatus($status)? $status: "";
    }

    //VALIDAR NA CLASSE
    public static function validarStatus($status) {
        return $status === self::STATUS_ATIVO || $status === self::STATUS_CRIANDO || $status === self::STATUS_DESATIVADO;
    }
}
?> 