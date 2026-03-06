<?php
$age = 25;

if ($age < 12) {
    $price = 20;
} elseif ($age >= 12 && $age <= 18) {
    $price = 40;
} elseif ($age > 60) {
    $price = 30;
} else {
    $price = 60;
}

if ($price == 20) {
    echo "Special: Children's Menu included! Price: $price DH<br>";
}

echo "The age is $age, the price is $price DH<br>";
?>