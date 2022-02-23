<?php

require 'Users.php';

$users = new Users();

// Attributes
$users->age = '21';
$users->weight = '115.05';
$users->birthDate = new \DateTime ('2000-12-20');

// Attributes static
Users::$name = 'Daniel';
Users::$childrens = ['Gabriel', 'Juliana', 'Miguel'];

echo 'Name: ' . Users::$name .  PHP_EOL .
     'Age: ' . $users->age . PHP_EOL .
     'Weight: ' . $users->weight . PHP_EOL .
     'BirthDate: ' . $users->birthDate->format('d/m/Y') . PHP_EOL .
     'Childrens: ' . count(Users::$childrens) . PHP_EOL;