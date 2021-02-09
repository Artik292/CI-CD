<?php
require 'Car.php';
echo "<h1>Hello, World from Artik292!</h1> <br>";
echo "<img src='images/image_1.jpg' alt='no image'> <br>";

$car = new Car('green', 4);

echo $car->GetColor();
?>
