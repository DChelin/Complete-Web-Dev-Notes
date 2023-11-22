<?php
//The $ indicates its a variable, like LET in Javascript
    $name = "Dev";

//The below is like a const in Javascript
    define("MESSAGE", "Hello friends!");

    echo "<p>My name is $name</p>";

    echo "<p> I'd like to say " . MESSAGE . "</p>";

//Below is a variable with an interger assigned to it.
    $number = 45;

    $calculation = $myNumber * 31 /97 + 4;
//Concatenating below.
    echo "The result of the calculation is " . $calculation;

//String interprelation below

   // echo "The result of the calculation is $calculation";

//Boolean Values below

    $myBool  = true;

    echo "<p>This statement is true? " . $myBool . "</p>";
//Printing the result of the boolean being either true of false.
    echo $myBool ? "true" : "false";
    echo "<br>";

//Variable variables

    $variableName = "name";
    echo $$variableName;

//CHALLENGE: Change the name to reflect my name when it calls it.
// I adjusted the variable $name to be my name.

?>
