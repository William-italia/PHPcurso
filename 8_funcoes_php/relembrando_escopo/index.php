<?php 

$a = 10;
$b = 15;

function teste() {

    $a = 5;
    $a++;

    global $b;
    static $c = 0;

    $c++;
    $b++;
    echo "Escopo Local de a dentro da funcao: $a." . "<br>";
    echo "Escopo Global na Funcao de b: $b" . "<br>";
    echo "Escopo static na Funcao de c: $c" . "<br>";
}

echo "Escopo Global de a: $a." . "<br>";
echo "Escopo Global de a: $b." . "<br>";
teste();
echo "Escopo Global de a: $b." . "<br>";
teste();
teste(); 

/*


function testeStatic() {

    static $a = 0;
    $a++;

    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
testeStatic();
?>

*/

?>