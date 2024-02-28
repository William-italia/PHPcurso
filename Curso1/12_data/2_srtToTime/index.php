<?php

    $cincoDias = strtotime('5 days');
    $dataAtualMais15dias = date('d/m/y', strtotime('15 days'));
    $dataAtualMais15meses = date('d/m/y', strtotime('15 month'));
    $dataAtualMais15anos = date('d/m/y', strtotime('15 year'));

    echo $cincoDias . "<BR>";
    
    echo $dataAtualMais15dias . "<BR>";
    echo $dataAtualMais15meses . "<BR>";
    echo $dataAtualMais15anos . "<BR>";

?>