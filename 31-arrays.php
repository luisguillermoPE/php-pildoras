<?php


$users = array("name"=>"Steve","lastname"=>"Tyler","job"=>"singer");
$rooms = ["one"=>"perú","two"=>"ecuador"];
$pass = "124";

echo $rooms["one"];
// echo $users["name"];

echo "\n";

if (is_array($pass)){
    echo "es un array";
}
else
{
    echo "no es un array";
};


?>