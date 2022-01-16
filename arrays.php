<?php

$random=rand();
echo"Random number = ". $random;


?>
 <div>

<h5> Practice 1 (For Loop)</h5>
<pre>1) Create matrix ( N x M ) usint arrays. 
    Where  N ( columns) is an integer that takes a value from 1 to 7, 
                 M rows can be any integer between 1 to 100.
2) Each Element of this matrix must contain a randowm integer value between 1 to 40
3) In Each row the element values must be unique
4) all Rows must be unique.

5) Calculate Maximum possible combinations Hint nCr. 

You can write this code either in JavaScript or PHP , both or combination. 
</pre>
<?php
    $min=1;
    $max=40;
    $r=rand($min,$max);
    
   /* echo "Number between 1 to 40</br>";

    for($i=0;$i<=100;$i++){
        $r=rand($min,$max);
        echo"<br>",$r;
    }*/


    
    for($row=0;$row<=100;$row++){
        $r=rand($min,$max);
        for($colomn=0;$colomn<=7;$colomn++){
            $array[$colomn]=[$r];
            echo '|'.$array[$row][$column];
        }
        echo '|<br />';
    }
 /*$rows = 100;    // Number of rows
$columns = 7;  // Number of columns

$min=1;
$max=40;

$row = [rand($min,$max)];
$column = [rand($min,$max)];

shuffle($row);
shuffle($column);

// Create an array

foreach ($row as $x => $value)
    foreach ($column as $y)
        $array[$y][$x] = $value++ % max($rows, $columns);
    
        foreach($array as $r) {
            foreach($r as $number) {
                echo $number.' ';
            }
            echo "<br/>";
        }*/

?>
</div>
<h5> Practice 2 (Convert String to INT)</h5>
<pre>
                 $num="2.75";
                $int= (int)$num;
                echo $int;
                $float=(float)$num;
                echo $float;</br>
                $num="ABC2.75"</br>
                $num="2.75abc";</br>

                $num=" 2.75";</br>
                $num="2.75 ";
                ;</br>

    
</pre>
<div>
            <?php
                $num="2.75";
                $int= (int)$num;
                echo $int."</br>";
                $float=(float)$num;
                echo $float."</br>";
                $num="ABC2.75";
                $int= (int)$num;
                echo $int."</br>";
                $float=(float)$num;
                echo $float."</br>";
                $num="2.75abc";
                $int= (int)$num;
                echo $int."</br>";
                $float=(float)$num;
                echo $float."</br>";
                $num=" 2.75";
                $int= (int)$num;
                echo $int."</br>";
                $float=(float)$num;
                echo $float."</br>";
                $num="2.75 ";
                $int= (int)$num;
                echo $int."</br>";
                $float=(float)$num;
                echo $float."</br>";

            ?>
        </div>
        <div>
        1) Create array of N length and store autogenerted Random numbers.
        2) Find the mean / average of these numbers
        3) Calculate the standard deviation of these numbers
        4) Calculate the variance of these numbers
        5) Calculate the percentile of  given number of that array 
        (the value that a given percent of the values are lower than).
        </div>
        <?php

        ?>
