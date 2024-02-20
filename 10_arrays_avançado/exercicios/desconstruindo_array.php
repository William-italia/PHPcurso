<?php

$carro = ["jaguar", "3.0", "azul", 18, "Teto Solar", "automatico"];

list($marca, $motor, $cor, $roda, $tetoSolar, $cambio) = $carro;


print_r($carro);

echo " <br>";
echo "Marca: $marca <br>";
echo "Motor: $motor <br>";
echo "Cor: $cor <br>";
echo "Roda: $roda Polegadas <br>";
echo "Possui: $tetoSolar <br>";
echo "Cambio: $cambio <br>";

?>