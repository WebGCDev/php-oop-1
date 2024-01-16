<?php

require_once __DIR__ . "/Models/Film.php";
require_once __DIR__ . "/Models/Actor.php";
require_once __DIR__ . "/Models/Characteristic.php";

$Films = [
    new Film('Le ali della libertà', new Actor('Frank Darabont', 'Morgan Freeman', 'Tim Robbins'), new Characteristic('144 min', false, 9.3)),
    new Film('Il padrino', new Actor('Francis Ford Coppola', 'Al Pacino', 'Marlon Brando'), new Characteristic('175 min', false, 9.2)),
    new Film('Pulp Fiction', new Actor('Quentin Tarantino', 'John Travolta', 'Uma Thurman'), new Characteristic('154 min', true, 8.9))
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>
    <?php foreach ($Films as $Film) { ?>
        <h1><?php echo $Film->film ?></h1>
        <span>
            <?php echo $Film->actor->printFullActor(); ?>
            <?php echo '<p>' ?>
            <?php echo $Film->characteristic->printFullCharacteristic(); ?>
        </span>
    <?php } ?>

</body>

</html>