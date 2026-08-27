<?php

$name = "Erick John";
$favFood = "Fries";
$otherFood = "Dried Adobo";

// 1. IF statement
if ($name == "Erick John") {
    echo "My name is Erick John.<br>";
}

// 2. IF...ELSE statement
if ($favFood == "Fries") {
    echo "My favorite food is fries.<br>";
} else {
    echo "I don't like fries.<br>";
}

// 3. IF...ELSEIF...ELSE statement
$age = 18;

if ($age < 13) {
    echo "I am a kid.<br>";
} elseif ($age < 18) {
    echo "I am a teenager.<br>";
} else {
    echo "I am an adult.<br>";
}

// 4. SWITCH statement
$food = "Dried Adobo";

switch ($food) {
    case "Fries":
        echo "I like fries!";
        break;

    case "Dried Adobo":
        echo "I also like dried adobo!";
        break;

    default:
        echo "This is not my favorite food.";
}

?>