<?php
// functions 
// first challenge 
echo "first challenge : The Personalized Greeting<br>";
function greetuser ($name){
    echo "Hello  $name  ! Ready to code?";
}
greetuser ("farid");
echo "<br>";

echo "----------------------------------------<br>";

// second challenge
echo "second challenge : The Calculation Engine <br>";
function Calculate_Area($width , $height): float|int{
       $result = $width * $height ;
       return $result ;

 }

$TotalArea = Calculate_Area( width: 8 ,  height: 12) ;
echo "The total area is $TotalArea square units";
echo "<br>";

echo "----------------------------------------<br>";


// therd challenge : The Logic Gatekeeper
echo "therd Challenge : The Logic Gatekeeper<br>";
function is_Adult ($age): bool{
    if ($age >= 18)
        {return true;}
    else{return false;} 
}
$age = 12;
         if (is_Adult($age)) {
            echo "Access Granted";}
        else{echo "Access Denied.";}
        echo "<br>";
    
    
 echo "----------------------------------------<br>";
 
 //fourth challenge : The 'Safe' Multiplier
 echo "fourth Challenge :  The 'Safe' Multiplier<br>";
function multiplyNumbers($a, $b){
    if (is_int($a) && is_int($b)){
         $result = $a * $b;
       echo "the result is: " . $result . "<br>";
    }
    else { echo "error : invalid input " . "<br>";}

}
    
  multiplyNumbers (a: 5, b: 10) . "<br>";
  multiplyNumbers  (a: 5, b: "apple") ."<br>";

 echo "----------------------------------------<br>";
 // fifth challenge
 echo "fifith challenge : The Text Flipper<br>";
 function manualReverse($text):string{
 $reversed="";
    $length =strlen($text);
    for($i=$length-1;$i>=0;$i--){
        $reversed .= $text[$i];
    }
    return $reversed;
}
echo manualReverse("Salam");
    

?>