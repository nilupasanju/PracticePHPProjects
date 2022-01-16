<html>
    <head></head>
<body>

<?php

//Indexed Array

$Colour = ['Red','Blue','Yellow'];
echo $Colour[0]; 
?>
<br>
<?php

$color = array ('red', 'blue', 'yellow');
echo $color[2];
?>
<br>

<?php
//Associative Array
$home_towns = array (
'Nilupa' => 'Galle, Srilanka',
'Nuwan' => 'Colombo, Srilanka',
'Fathema' => 'Dubai, UAE',
);


echo $home_towns['Nuwan']."<br";

$StudentsMarks=[
    ["fathhima"=>["Maths"=>95,"English"=>99,"Science"=>65,"Art"=>93,"Computer Science"=>72]],
    ["Robert"=>["Maths"=>100,"English"=>99,"Science"=>50,"Art"=>80,"Computer Science"=>30]],
    ["David"=>["Maths"=>60,"English"=>95,"Science"=>83,"Art"=>98,"Computer Science"=>80]],
    ["Harsh"=>["Maths"=>99,"English"=>70,"Science"=>60,"Art"=>90,"Computer Science"=>45]]];

 /*   access each student marks
 $StudentsMarks as $value;
 $value1 of firstarray
 $value1=["fathhima"=>["Maths"=>95,"English"=>99,"Science"=>65,"Art"=>93,"Computer Science"=>72]]

 $value of second array
 $value2=["Maths"=>95,"English"=>99,"Science"=>65,"Art"=>93,"Computer Science"=>72];

 $value of third array
 $value3=[95]
*/


// total of onestudent marks array

foreach($StudentsMarks as $key=>$value){
    
    foreach($value as $innerkey =>$innervalue){
       
        echo $innervalue;
        foreach($innervalue as $inne1rkey =>$inner1value){
       
            echo $inner1value;
        }
    }
    echo"<br>";
    echo max($StudentsMarks);
}

/*for ($row = 0; $row < 5; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 6; $col++) {
      echo "<li>".$StudentsMarks[$row][$col]."</li>";
    }
    echo "</ul>";
  }




/*for($i=0;$i<=5;$i++){
    //echo $value;
    echo "$i.<br>";
                 
    foreach($StudentsMarks as$value){
         echo " $value <br>";
        foreach($value as $value){
            echo " $value <br>";
            foreach($value as $value){
            echo " $value <br>";
                
            }
        }
     }
} 
/*
//total of each student

//inner value of each array
foreach($StudentsMarks as $key=>$value){
    
        foreach($value as $innerkey =>$innervalue){
           
            echo $innervalue;
       
        }
        echo"<br>";
        echo max($StudentsMarks);
}
//How to get avaerage of array
$num=[12,15,30];
$n=count($num);
$sum=$num[0]+$num[1]+$num[2];



echo "Sum of all numbers <br>";
echo $sum."<br>";
echo "Average of numbers = Sum of numbers/n <br>";
$avg=$sum/$n;
echo $avg;*/


?>
</body>
</html>