<?php

    include_once "backend.php";

?> 

<h1><?= $titulo?></h1>

<p>Seja muito bem vindo ao nosso site <?= $nome?>!</p>
<p>Veja as nossas ofertas</p>

<h2>Confira nossos principais produtos:</h2>
<ul>
    <?php foreach($produtos as $produto): ?>
    <li><?= $produto ?></li>
    <?php endforeach; ?>

</ul>
