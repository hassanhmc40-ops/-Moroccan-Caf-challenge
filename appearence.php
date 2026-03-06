<?php
$tea_cups_number = 7;
$price = 10;
$identity = "student";

if ($tea_cups_number >= 5) {
    $price = $price -1;  
}
if ($identity == "student") {
    $price = $price * 0.8;  
}
echo "The tea cups number is: " . $tea_cups_number . "<BR>";

echo "-------------------------------------------------------------<BR>";

echo "The customer identity is: " . $identity . "<BR>";

echo "-------------------------------------------------------------<BR>";

echo "The price of the tea is: " . $price . "DH" . "<BR>";



?>