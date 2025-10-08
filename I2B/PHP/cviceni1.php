<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>

    </style>
</head>
<body>
    
</body>
</html>

<?php
    $cislo = 18;
    $jmeno = "Martin";
    echo "Hodnoty mých proměnných jsou: <span style = 'color: red'>$cislo</span> a <span style = 'color: blue'>$jmeno</span>";

    $tyden[0] = "Pondělí";
    $tyden[1] = "Úterý";
    $tyden[2] = "Středa";
    $tyden[3] = "Čtvrtek";
    $tyden[4] = "Pátek";

    $tyden[] = "Sobota";

    $tyden[7] = "Neděle";

    echo "<br>";

    print_r($tyden);

    $pocet_prvku = count($tyden);
    echo "<br>";

    echo "Počet prvků v poli je " . $pocet_prvku;

    sort($tyden);
    echo "<br>";
    print_r($tyden);
    echo "<br>";

    unset($tyden[6]);
    print_r($tyden);

    echo "<br>";


    // $animals = array( "Dog", "Cat", "Horse", "Cow", "Sheep", "Goat", "Pig", "Chicken", "Duck", "Goose",
    // "Rabbit", "Deer", "Fox", "Wolf", "Bear", "Lion", "Tiger", "Leopard", "Cheetah", "Elephant",
    // "Giraffe", "Zebra", "Kangaroo", "Koala", "Panda", "Monkey", "Gorilla", "Chimpanzee", "Orangutan", "Baboon",
    // "Hippopotamus", "Rhinoceros", "Crocodile", "Alligator", "Turtle", "Tortoise", "Frog", "Toad", "Lizard", "Snake",
    // "Eagle", "Hawk", "Falcon", "Owl", "Parrot", "Penguin", "Seal", "Dolphin", "Whale, Shark");


    $zvirata = "Dog, Cat, Horse, Cow, Sheep, Goat, Pig, Chicken, Duck, Goose,
    Rabbit, Deer, Fox, Wolf, Bear, Lion, Tiger, Leopard, Cheetah, Elephant,
    Giraffe, Zebra, Kangaroo, Koala, Panda, Monkey, Gorilla, Chimpanzee, Orangutan, Baboon,
    Hippopotamus, Rhinoceros, Crocodile, Alligator, Turtle, Tortoise, Frog, Toad, Lizard, Snake,
    Eagle, Hawk, Falcon, Owl, Parrot, Penguin, Seal, Dolphin, Whale, Shark";

    


   // explode(" || ", $animals);
    print_r($animals);

    sort($animals);
    echo "<br>";
    print_r($animals);

?>