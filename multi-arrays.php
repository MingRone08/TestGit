<?php
    $house = array(
        array("Small", 5, 150),
        array("Average", 7, 250),
        array("Big", 2, 350),
    );

    echo "The product which are ready to be sell.";
    for ($row = 0; $row < 3; $row++){
        echo "<ul>";
        for($column = 0; $column < 3; $column++){
            if($column == 0){
                echo "<li>Size: " . $house[$row][$column] . "</li>";
            }
            else if ($column == 1){
                echo "<li>Amount of available product: " . $house[$row][$column] . "</li>";
            }
            else{
            echo "<li>Price: " . $house[$row][$column] ;
            }
        }
        echo "</ul>";
    }
?>