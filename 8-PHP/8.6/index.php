<?php

    $user = "Dev";

    if($user == "Dev"){
        echo "Hello $user!";
    } else{
        echo "Your user access is not permitted!";
    }

    echo "<br><br>";

    $age = 17;

    if ($age >= 21){
        echo "Here, have a beer!<br>";
    } else{
        echo "Have a juice poes!";
    }

    echo "<br><br>";

    if($age >= 21 && $user == "Dev"){
        echo "Welcome Dev!";
    } else{
        echo "Security is on the way poes!";
    }

    echo "<br><br>";   

    if($user == "rob" || $age >= 21){
        echo "Wecloem to the club<br>";
    } else{
        echo "Sorry you need to be named Rob or be atleast 21 years old.... poes!";
    }

    echo "<br><br>";
//CHALLENGE: Write code to welcome people to the society of awesome people if their name is john, rob, or ed.

    $members = ['John', 'Rob', 'Ed'] ;

    if($members == "John" || "Rob" || "Ed"){
        echo "Welcome to the Society of Awesome People!";
    } else {
        echo "Fuck off poes!";
    }

    ?>