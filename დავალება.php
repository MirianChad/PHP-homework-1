<?php
$command = 0;
do {
    $number1 = 0;
    $number2 = 0;
    echo "press 1 to start \n";
    $command = readline();

    switch ($command) {
        case 1:
            echo "Enter first number \n";
            $number1 = readline();
            echo "Enter second number \n";
            $number2 = readline();

            if ($number1 < 101 and $number2 < 101) {
                $multiplication = $number1 * $number2;
                print("$number1 \n");
                print("$number2 \n");
                print("$multiplication \n");
            }elseif ($number1>100 or $number2>100){
                print("$number1 \n");
                print("$number2 \n");
                echo "Number can't be greater than 100 press 1 to enter them again \n";
            }
            break;

        default:
            echo "Command not recognized, allowed only 1 \n";
            break;
    }
} while ($number1 !=0 and $number2 !=0);









