<?php
$studentGrades = array(
    'John' => 75,
    'Jack' => 92,
    'Jill' => 100,
    'Joan' => 80
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Odd or Even</h3>
    <ul style="list-style: none;">
        <?php $number = 1;
        while ($number <= 10) : ?>
            <?php if ($number % 2 == 0) : ?>
                <p><?= $number ?> is Even</p>
            <?php else : ?>
                <p><?= $number ?> is Odd</p>
            <?php endif; ?>
            <?php $number++ ?>
        <?php endwhile; ?>
    </ul>

    <h3>Break Out of a loop</h3>
    <ul style="list-style: none;">
        <?php
        for ($i = 1; $i <= 10; $i++) :
        ?>
            <?php if ($i == 5) : ?>
                <li>Loop finalizado</li>
                <?php break; ?>
            <?php else : ?>
                <li><?= $i ?></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
    <h3>Skip and continue</h3>
    <ul style="list-style: none;">
        <?php
        for ($i = 1; $i <= 10; $i++) :
        ?>
            <?php if ($i == 5) : ?>
                <li>Pulando o numero 5</li>
                <?php continue; ?>
            <?php else : ?>
                <li><?= $i ?></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>

    <h3>Students with the highest average</h3>
    <ul style="list-style: none;">
        <?php
        foreach ($studentGrades as $name => $grade) :
        ?>
            <?php if ($grade > 90) : ?>
                <li><?= $name ?> has an excellent grade: <?= $grade ?></li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>