<!- O espaço em branco é ignorado pelo PHP porem deixa o codigo dificil de ler -->

<?php
echo "Uma linha <br>"                     ;
echo                             "Outra Linha <br>";
echo 
    "quebra de linha <br>"
;

$num = 6;

if($num > 7) {
    echo "$num é maior que dois";
} else {
    echo "7 é maior que $num";
}
