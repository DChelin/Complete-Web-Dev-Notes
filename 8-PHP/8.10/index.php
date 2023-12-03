<?php

//POST Method

    if($_POST){
        $family = array("Mila", "Ryan", "Damian", "Jason", "Jan");

        $isKnown = false;
        
        foreach($family as $value){
            if($value == $_POST['name']){
                $isKnown = true;
                break;
            }
        }

        if($isKnown){
            echo "Hi, " . $_POST['name'] . "!<br>";
            if($_POST['age']){
                echo ' You are ' . $_POST['age'] . " years old!<br>";
            }

        }
        else {
            echo "I dont know you!";
        }
    }

    //CHALLENEG: ADD HTML and PHP so that the user can enter his age into the form and only print out the age if they are one of the family members.
?>


<form method="post">
    <p>What is your name?</p>

    <p><input type="text" name="name" placeholder="Name"></p>
    <p><input type="text" name="age" placeholder="Age"></p>
    <p><input type="submit" value="submit"> </p>

</form>