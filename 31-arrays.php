<?php


$users = array("name"=>"Steve","lastname"=>"Tyler","job"=>"singer");
$rooms = ["one"=>"perú","two"=>"ecuador"];
$pass = array(1,2,3,4,5);

// echo $rooms["one"];
// echo $users["name"];

echo "\n";

// if (is_array($pass)){
//     echo "es un array";
// }
// else
// {
//     echo "no es un array";
// };


foreach($rooms as $i=>$value)
{
    // echo $i." le corresponde el país: ".$value."\n";
    echo "$i. le corresponde el país: $value \n";
};

for ($i=0;$i<count($pass);$i++){
    echo "$pass[$i] \t";
};

echo "\n";
// echo $rooms["one"];

for ($a=0;$a<count($rooms);$a++){
    echo "$a \t";
};



?>