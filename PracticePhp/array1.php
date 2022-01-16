<?php
    $min = 1;
    $max = 40;
    $array = array();
    

    //generate random numbers in the range of 1-40 in an array called $array
    for($row = 0; $row <=100; $row++){
        $array[$row][0] = rand(1, 40);
        echo $array[$row]."<br>";
       
            for($colomn = 1; $colomn <=7; $colomn++){
                $array[$row][$colomn] = rand(1, 40);
                echo $array[$row][$colomn]."<br>";
            }
        //print_r($array)."<br>";
         
    }
    echo "<br>";
    print_r($array)."<br>";

    



    
?>