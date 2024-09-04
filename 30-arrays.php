<?php

// array indexado

$week[]="monday";
$week[] = "wednesday";
$week[]="thursday";


// var_dump($week);

// echo $week[1];

// foreach($week as $i => $w){
//     echo $i."-> ".$w."\n";
// }


$array = array(1, 2, 3, 4);
foreach ($array as $valor) {
    $arrayy[] = $valor * 2;
}
// var_dump($arrayy);


$users = array("name"=>"Steve","lastname"=>"Tyler","job"=>"singer");
$pass = "124";

// echo $users["name"];


if (is_array($pass)){
    echo "es un array";
}
else
{
    echo "no es un array";
};


?>
