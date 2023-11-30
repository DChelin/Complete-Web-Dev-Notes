<?php

  if(is_numeric($_GET["number"]) && 
    $_GET['number'] > 0 &&
    $_GET ['number'] == round($_GET['number'], 0)) {
    $theNumber = $_GET['number'];
    $i = 2;
    $isPrime = true;

    while($i < $theNumber / 2){
        if($theNumber % $i == 0) {
            $isPrime = false; //Found non-prime number
        }
            $i++;

    }//end While loop

        if($isPrime){
            echo "<p>" . $theNumber . " is a prime number!</p>";
        }
        else{
            echo "". $theNumber . " is NOT a prime number!</p>";
        }//end if-else
    }
    elseif ($_GET) {
        echo "<p>Please enter a positive whole number.</p>";

    }
?>


<p>Please enter a whole number.</p>

<form method="GET">
    <input name="number" type="text">
    <input type="submit" value="Go!">
</form>