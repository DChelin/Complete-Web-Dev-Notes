<?php

//Array of family memebrs

    $family = array("Dev ", "Janet ", "Jason ", "Kyle ");

    foreach($family as $key => $value){
        $family[$key] = $value . "Chelin";
        echo "Array item " . $key . " is " . $value ."<br>";
        echo "Update: $family[$key] <br>";
    }

    echo"<br><br>";

    echo "Regular for loop: <br><br>";
    for($i = 0; $i <sizeof($family); $i++){
        echo $family[$i] ."<br>";

    }

//CHALLENGE: Write a for loop to count down from 10 to 0 instead of counting up.
    echo"<br><br>";
    for($loop = 10; $loop >= 0; $loop--){
        echo $loop ."<br>";
    }
?>