<?php
/*
    print_r($_POST);
    
    echo "<h2>$val</h2>";
*/
    //Get the value from the Ajax call
    $val = $_POST['num'];
    $name = $_POST['name'];
    echo "<h2>Hello, $name!</h2>";
    
    $adjs = array("funny", "smart", "nerdy");
    $names = array("Marlene", "Doc", "Lizzy", "Jeff");
    
    for ($i = 0; $i < $val; $i++) {
        $name = $names[rand(0, count($names)-1)];
        $adj = $adjs[rand(0, count($adjs)-1)];
        
        echo "<h3>$name is very $adj.</h3>";
    }
    