<?php

function incrementNumber()
{
    static $number = 0;
    $number++;
    // return $number;
    return 370/24;
};


echo incrementNumber() . "\n";
echo incrementNumber() . "\n";
echo incrementNumber() . "\n";
echo incrementNumber() . "\n";


