<?php

$name = $argv[1];
$year = $argv[2];

$age = date("Y") - $year;

echo "Your name is $name, and your age is $age\n";

if($age >= 18){
    echo "You are a Registered Voter \n";
} else {
    echo "You are too young to be a Voter \n";
}

if($age >= 60){
    echo "You are a Senior Citizen \n";
} else {
    echo "You are a Young Person \n";
}
