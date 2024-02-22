<?php

$textoHtml = "<p>Testando paragrafo</p><div>seção 1</div><p>testando outro paragrafo</p>";

echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);
echo $salvarTextoBanco;

?>