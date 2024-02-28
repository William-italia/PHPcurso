<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2025, 10, 10);

    if($dataB > $dataA) {
        echo "A data B é maior que a data A";
    } else {
        echo "A data A é maior que a data B";
    }

?>