<?php

     $people = array("Ryan", "Jenna", "Jacky", "Robyn", "Lisa");
     $i = 0;

     while($i < sizeof($people)) {
        echo $people[$i] . "<br";
        $i++;
    }

    $i = 1;

    while($i <= 10) {
        $j = $i * 5;

        echo $j . "<br>";

        $i++;

    }

    //CHALLNGE: Count to 20 in 2's

    echo "<br><br>";

    $i = 0;
    while($i <= 20) {
        echo $i . "<br>";

        $i +=2;
    }

?>