<?php
$date = 7;
switch ($date) {
    case 1: // we can use same condition for multiple case like that->   case 1: case 2: case 3:
        echo "This is monday";
        break;
    case 2:
        echo "This is tuesday";
        break;
    case 3:
        echo "This is wednesday";
        break;
    case 4:
        echo "This is thursday";
        break;
    case 5:
        echo "This is friday";
        break;
    case 6:
        echo "This is saturday";
        break;
    case 7:
        echo "This is sunday<br>";
        echo "this is for test";
        break;
    default:
    echo "enter the correct day";
    }

    
    echo "<br>";
    $age = 18;
    switch (true) {
        case ($age >=15 && $age <=20): // we can use same condition for multiple case like that->   case 1: case 2: case 3:
            echo "you are eligible";
            break;
        case ($age >=21 && $age <=25):
            echo "You are not eligible.";
            break;
        default:
            echo"Enter the valid age.";
}
