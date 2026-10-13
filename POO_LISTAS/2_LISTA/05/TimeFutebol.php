<?php
class TimeFutebol {
    public $nome;
    public $cidade;
    public $equipeBase;

    
    public static $contador = 0;

public static $camisetasVendidas = 0;
    ///self = acessa o static, enquanto o $this, um objeto
        public function __construct($nome, $cidade, $equipeBase, $camisetas) {
        $this->nome = $nome;
        $this ->cidade = $cidade;
        $this -> equipeBase = $equipeBase; 
        self::$contador++;
        self::$camisetasVendidas+=$camisetas;
        
    }
    public static function novoTime(){
        echo "<br><br>" ;
        return new self (
            "Anônimo",
            "De qualquer lugar!",
            false,
            0);
    }

//TESTE: ERRO DE CÓDIGO - 
//public static function teste () {
  //  $this -> nome = "Teste";
    //}
    //RESULTADO: ERRO DE COMPILAÇÃO: 
    //APARECE NO COMPILADOR: "Parse error: syntax error, unexpected token "public" in C:\xampp\htdocs\POO_LISTAS\2_LISTA\05\TimeFutebol.php on line 30"


//CORREÇÃO: 
public static function teste(){
    self::$contador++;
    return "Feito!";
}
///COMPILADOR: 
// Nro camisetas vendidas: 217
//
//Quantidade de times que temos camisetas disponíveis: 3
//
//Quer incluir um time? Então se liga: Anônimo! De qualquer lugar!
//
//Atualizamos nosso estoque, agora temos 4 times com camisetas disponíveis!
}
?>

























