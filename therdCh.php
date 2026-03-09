<?php

$user =[
    ["nom" => "hassan",
    "money"=> 80
    ],

    ["nom" => "Amin",
    "money"=> 90
    ],

    ["nom" => "said",
    "money"=> 306
    ],

    ["nom" => "laila",
    "money"=> 120
    ],

    ["nom" => "ayman",
    "money"=> 330
    ],

];
$somme =0 ;
$gent=[];
foreach($user as $use){
    $somme += $use["money"];

    if($use["money"]>100){
        $gent[]= $use["nom"];
    }
   
}
 echo "The total amount owed is : " . $somme . " DH" . "<br>";
 
 echo "The people who owe more than 100 DH are : " . implode(" , ",$gent);
?>