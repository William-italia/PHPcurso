<?php

$url = "https://www.google.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);
echo "<br>";

echo $arrayUrl["host"];
echo "<br>";
echo $arrayUrl["scheme"];
echo "<br>";

$url2 = "http://www.horadecodar.com.br/usuarios/williamitalia?id=12&nome=William";

$arrayUrl2 = parse_url($url2);
print_r($arrayUrl2);
echo "<br>";


?>