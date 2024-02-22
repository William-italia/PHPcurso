<?php 

$arr = [
    'Matheus' => 200,
    'João' => 55,
    'Pedro' => 145,
    'Maria' => 100,
    'Joana' => 123,
    'Henrique' => 12
];

asort($arr);
arsort($arr);


?>

<table border="1">
    <td colspan="2" style="text-align: center; font-weight: bold;">Ranking</td>
    <tr>
        <th>Nome</th>
        <th>Pontos</th>
    </tr>
    <?php foreach($arr as $nome => $pontos): ?>
        <tr>
            <td> <?= $nome; ?> </td>
            <td> <?= $pontos; ?> </td>
        </tr>
    <?php endforeach; ?>
</table>
