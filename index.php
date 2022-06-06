<?php
require_once './vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create('id_ID');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <?php for ($i = 0; $i < 10; $i++): ?>
    <ul>
        <li>Nama: <?=$faker->name;?> </li>
        <li>Email: <?=$faker->email;?> </li>
        <li>Alamat: <?=$faker->address;?> </li>
    </ul>
    <?php endfor?>
</body>
</html>
