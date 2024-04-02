<!-- 
Desafio
Crie uma classe chamada StringUtility que tenha os seguintes métodos estáticos:
shout($string) - Recebe uma string e a retorna em letras maiúsculas com um ponto de exclamação adicionado no final.

whisper($string) - Recebe uma string e a retorna em letras minúsculas com um ponto adicionado no final.

repeat($string, $times) - Recebe uma string e um número, e retorna a string repetida o número especificado de vezes. Use um valor padrão de 2 para o parâmetro $times.

Crie uma nova instância da classe StringUtility e chame cada um dos métodos nela.
Dicas
Você pode usar as funções strtoupper e strtolower para converter uma string para maiúsculas ou minúsculas.
Você pode usar a função str_repeat para repetir uma string um determinado número de vezes. -->

<?php

    class StringUtility {

        public static function shout($string) {
            return strtoupper($string) . '!';
        }

        public static function whisper($string) {
            return strtolower($string) . '.';
        }

        public static function repeat($string, $times = 2) {
            return str_repeat($string, $times);        
        }

    }

    echo StringUtility::shout('Olá') . '<br>';
    echo StringUtility::whisper('OLA') . '<br>';
    echo StringUtility::repeat('Olá') . '<br>';


?>