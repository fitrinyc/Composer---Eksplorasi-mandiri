<?php
    require_once 'vendor/autoload.php';
    $faker = Faker\Factory::create();
?>

<html>
    <h1>Daftar Nama</h1>
    <ul>
        <?php
            for ($i = 1; $i <=10; $i++){?>
                <li><?= $faker->name; ?></li>
        <?php    } ?>
    </ul>
</html>