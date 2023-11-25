<?php

//creating an array

    $myArray = array ("Jenna", "Tahirah", "Sandile", "Pat");

//Creating a Heading for the array

    echo "<h1>Array of names:</h1>";

//printing out the content of array

    print_r ($myArray);

//echoing just item 2 in the array

    echo $myArray [2];

    echo "<br><br>";

//Creating a Heading for the array

    echo "<h1>Array of food:</h1>";

//creating empty array then assign array items below it with the order.

    $foodArray = array();

    $foodArray[0] = "pizza";
    $foodArray[1] = "ice-cream";
    $foodArray[2] = "steak";
    $foodArray[3] = "eggs";

//adding an array item without an idex which adds to the end of the array

    $foodArray[] = "chocolate";

    print_r ($foodArray);

//We dont have to just use intergers

    $foodArray["myFavouriteFood"] = "ice cream";

    print_r($foodArray);

    $languages = array(
        "France" => "French",
        "Germany" => "German",
        "South Africa" => "English",
    );

    echo "<br><br>";
    
    print_r ($languages);

//delete an element of an array.

    unset($languages ["France"]);

    print_r ($languages);

//Check the size of the array
   
    echo sizeof($languages);

//CHALLENGE: CREATE A NEW ARRAY CALLED FAVOURITE MOVIES WITH 3 OR 4 MOVIES AND PRINT OUT THE LENGTH OF THE ARRAY.

    $favouriteMovies = array(

    '#1' => "Tower Heist",
    '#2' => "Red Dog",
    '#3' => "Star Wars",
    '#4' => "Lord of the Rings",
    );

    print_r ($favouriteMovies);
    echo sizeof($favouriteMovies);
    
?>