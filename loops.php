<?php
// challenge 1 : how to control a loop that counts forwards.
echo"challenge 1 : how to control a loop that counts forwards.<br>";
$i =1;
while ($i <=10){
    echo $i . "<br>";
    $i++;
}
echo "-----------------------------------------------------------<br>";
//challenge 2 : how to control a loop that counts backwards.
echo "challenge 2 : how to control a loop that counts backwards.<br>";
$i=10;
while ($i >=1){
    echo $i . "<br>";
    $i--;
}
echo "-----------------------------------------------------------<br>";
// challenge 3 : Even Number Detector
echo "challenge 3 : Even Number Detector . <br>";
$i = 0;
while($i <=10){
    echo $i *2 . "<br>";
    $i++;
}
echo "-----------------------------------------------------------<br>";
//challenge 4 
echo "challenge 4 <br>";
echo "<br>";
$counter = 1;
$totale_even = 0;
while ($counter <= 50){
    if ($counter % 2 == 0){
        $totale_even = $totale_even + 1 ;
    }
    $counter++;
}

echo "Total numbers even is : $totale_even";
echo "-----------------------------------------------------------<br>";
// challenge 5
echo "challenge 5 <br>"; 
echo "<br>";
$star = "*" ;

for  ($i = 1 ; $i <=10 ; $i++ ){
echo $star ;

}
echo "-----------------------------------------------------------<br>";
// challenge 6 
echo "challenge 6 <br>";
for($e=0;$e<=5;$e++){
    for($i=0;$i<=$e;$i++){
        echo "*"; 
    }
    echo"<br>";
}

?>
