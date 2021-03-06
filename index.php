<?php
/*
Crie um algoritmo que percorre uma array unidimensional contendo letras e números: [ “a”, 10, “b”, “hola”, 122, 15]
Obtenha uma array contendo apenas as letras
Obtenha uma array contendo apenas os números
Obtenha o maior número da array acima

*/

$array = [ 'a', 10, 'b', 'hola', 122, 15];
$numeros = [];
$letras = [];
$maior = 0;
$aux = 0;

foreach( $array as $k => $v) {
    if(is_int($v)) {
        $numeros[$k] = $v; 
    }
}

echo 'Numeros: ';
echo '<br>';
print_r($numeros);
echo '<br><br>';

foreach( $array as $k => $v) {
    if(is_string($v)) {
        $letras[$k] = $v; 
    }
}

echo 'Letras: ';
echo '<br>';
print_r($letras);
echo '<br><br>';

foreach( $array as $v) {
    
    if (is_numeric($v) && $v > $aux) {
        $maior = $v; 
        $aux = $v;
    }
    else {
        $maior = $aux;
    }
    
}

echo 'Maior: <br>';
print_r($maior);

echo '<br>----------------<br>';

/*
Crie um hashmap (ou um objeto simples em PHP) que contenha as funções elementares de adição, subtração, multiplicação e divisão.
Leve em consideração que a divisão não deve permitir dividendo 0
A função sum permite um array como parâmetro de entrada e adiciona todos os seus elementos.
A função de subtração permite um array como parâmetro de entrada e subtrai todos os seus elementos.
Função de multiplicação - Idem
A função de divisão aceita dois parâmetros: a e b.

*/

require_once __DIR__ . '/Math.php';

$math = new Math();
echo "Soma: " . $math->sum([4, 3, 2]);
echo "<br>";
echo "Subtracao: " . $math->sub([4, 3, 2]);
echo "<br>";
echo "Multiplicacao: " . $math->mult([4, 3, 2]);
echo "<br>";
echo "Divisao: " . $math->div(4, 2);

echo '<br>----------------<br>';

/*
Crie um algoritmo que gere o seguinte padrão de ID aleatório: XXXX-AAAA-BBBB-CCCC
Onde os padrões XXXX, AAAA, BBBB e CCCC são alfanuméricos aleatórios
O padrão é uma string: "XXXX-AAAA-BBBB-CCCC"
O resultado deve ser armazenado em uma variável. Por exemplo:
$id = generarId()
id vale ~ abc1-bb12-234a-bcc2

*/

function generateID() {
    $str = str_shuffle('1111222233334444aaaabbbbcccc');
    $id = '';
    for($i = 0; $i <= 12; $i += 4){
        $id .= substr($str,1 , 4);
        if($i < 12){$id .= '-';}
        $str = substr($str, 4);
    }
    return $id;
}
echo 'Generate ID: <br>'. generateID();