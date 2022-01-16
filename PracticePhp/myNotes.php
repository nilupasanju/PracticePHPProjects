
<?

// I Set a few variables to make my page Nice . and i Stared with assign varibles
$site_title = "MyPHP Notes";
$bg_color = "lightblue";
$user_name = "Nilupa";
$big_font = "h3";
$hcolour="green";
?>
<html>
<head>
<title><? echo $site_title; ?></title>
</head>
<body bgcolor="<? echo $bg_color; ?>" >
<?
// Display an intro. message with date and user name.
echo "
<$big_font>PHP Notes | ".date("F d, Y")." <br>
Greetings, $user_name! <br></$big_font>
";
?>
<h3 style="color:blue";>My PHP Notes</h3>
<pre>
    PHP is a programming language which can use make website more dynamically.
    here are the Notes i have tried with basic concepts.

</pre>
<div>
    <pre>
    Web Server is an information technology that process requests via HTTP. Ex: IIS, Apache, Sun java system
    <br>
    Php runs on differant platforms<br>
    <ul>
    <li>Windows</li>
    <li>Mac</li>
    <li>Ubuntu</li>
    </ul>

    </pre>


</div>

<?

$variable = "Hello World! ";

echo $variable; ?>
<h3 style="color:green";>Single-Line Comments</h3>
<!--Single-Line Comments-->
<pre>
    
    //Assign Rose_colour as red
    $rose_color = "red";<br>
    //Assign  the color of the violets.<br>
    $violet_color = "blue";<br>
    echo ">Roses are $rose_color, violets are $violet_color";<br>
</pre>
<?
//Assign Rose_colour as red
$rose_color = "red";
//Assign  the color of the violets.
$violet_color = "blue";
echo "<br>Roses are $rose_color, violets are $violet_color.<br>";

?>

<h3 style="color:green";>String Assignments</h3>
$food = "Milk Rice"; </br>
$food = 'Milk Rice'; </br>
<?php

$food = "milk rice";
$food = 'milk rice'; 

$sentence = "My favorite food is $food";
$sentence2 = 'My favorite food is $food';

echo $sentence."</br>";
echo $sentence2."</br>";

?>
<pre>
SEQUENCE REPRESENTATION
\n Newline <br>
\” Double-quotation mark <br>


</pre>
<?php
$list = "item1\nitem2\nitem3";
echo $list;

?>
<h3 style= "color:green";>Operators</h3>
<pre> We learned about Arithmatic , Logical, Comparision Operators</pre>
<br>
<h4 style="color:navyblue";>Arithmatic Operators</h4>

<table>
    <tr>
        <th>Operators</th>
        <th>Descriptions</th>
        <th>Example ($x=3,$y=2)</th>
    </tr>
    <tr>
        <td>+</td>
        <td>Addition</td>
        <td> $x+$y=5</td>
    </tr>
    <tr>
        <td>-</td>
        <td>Substraction</td>
        <td>$x-$y=1</td>
    </tr>
    <tr>
        <td>*</td>
        <td>Multiplication</td>
        <td>$x*$y=6</td>
    </tr>
    <tr>
        <td>/</td>
        <td>Division</td>
        <td>$x/$y=1.5</td>
    </tr>
    <tr>
        <td>%</td>
        <td>Modules</td>
        <td>$x%$y=1</td>
    </tr>
    <tr>
        <td>++</td>
        <td>Increment</td>
        <td>$x++=4</td>
        
    </tr>
        <td>--</td>
        <td>Decrement</td>
        <td>$x--=2</td>
    <tr>

    </tr>
</table> 

<h4>Answer is :</h4>
<?php
$x = 3;
 $y = 2;

 $z = $x + $y;
 echo "Addition Operation Result: $z <br/>";
 $z = $x - $y;
 echo "Subtraction Operation Result: $z <br/>";
 $z = $x * $y;
 echo "Multiplication Operation Result: $z <br/>";
 $z = $x / $y;
 echo "Division Operation Result: $z <br/>";
 $z = $x % $y;
 echo "Modulus Operation Result: $z <br/>";
 $z = $x++;
 echo "Increment Operation Result: $z <br/>";
 $z = $x--;
 echo "Decrement Operation Result: $z <br/>";
?>
<h3 style="color:navyblue";>Logical Operators</h3>


<table>
    <tr>
        <th>Operators</th>
        <th>Description</th>
        <th>Example</th>
        
    </tr>
    <tr>
        <td>&&</td>
        <td>And</td>
        <td>Both Condition True , return True ,<br> if one condition false return False</td>
    </tr>
    <tr>
        <td>||</td>
        <td>Or</td>
        <td>What ever condotion TRUE Return True<br> if Both condition false return False</td>
    </tr>
    <tr>
        <td>!</td>
        <td>Not</td>
        <td>If the result False Return True<br> if the result True return False</td>
    </tr>
</table>
<pre>
Example:
    $name="Nilupa";
    $age=36;

    if($age<18 && $memberid="Nilupa"){ <br>
    Echo "You Can't Participate Chess Tournament as this Is Under 16 and You not a Member;"<br>
    }elseif($age=18 or $memberid="Nilupa"){<br>
        Echo "You Can Participate Chess Tournament as You are Member of chess club";<br>
    }else{<br>
    Echo "Register on Chess Club";<br>
    }<br>
    
</pre>

<h4>Answer is :</h4>
<?php
$memberid="Nilupa";
$age=36;

if($age<18 && $memberid="Nilupa"){
   Echo "You Can't Participate Chess Tournament as this Is Under 16 and You not a Member";
}elseif($age=18 or $memberid="Nilupa"){
    Echo "You Can Participate Chess Tournament as You are Member of chess club";
}else{
Echo "Register on Chess Club";
}
?>

<h3 style="color:green";>check whether a number is even or odd using if else</h3>
<pre>
    Example:
    <br>
    $number=3;<br>
    if ($number%2 == 0)<br>
        echo "$number is a even number";<br>
    else <br>
        echo "$number is a odd number";<br>
</pre>

<h4>Answer is :</h4>
<?php
//check whether a number is even or odd using if else
$number=3;
if ($number%2 == 0)
    echo "$number is a even number";
else 
    echo "$number is a odd number";
?>

<h3 style="color:green";>input a number and check positive negative or zero using switch case</h3>
<pre>
Example:
    <br>
    $number=3;<br>
    switch($number){<br>
    case($number>0):<br>
        echo "$number is a positive number";<br>
    break;<br>
    case($number=0):<br>
        echo "$number is a Zero";<br>
    break;<br>
    case($number<0);<br>
        echo "$number is a Negative";<br>
    break;<br>
}<br>
</pre>
<h4>Answer is :</h4>

<?php
//input a number and check positive negative or zero using switch case
$number=3;
switch($number){
case($number>0):
    echo "$number is a positive number";
break;
case($number=0):
    echo "$number is a Zero";
break;
case($number<0);
    echo "$number is a Negative";
break;
}
?>

<h3 style="color:green";>Average of Number</h3>
<pre>
Example:    
    $num=[12,15,30];<br>
    $n=count($num);<br>
    $sum=$num[0]+$num[1]+$num[2];<br>


    echo "Sum of all numbers ";<br>
    echo $sum;<br>
    echo "Average of numbers = Sum of numbers/n ";<br>
    $avg=$sum/$n;<br>
    echo $avg;<br>
    </pre>

<h4>Answer is :</h4>

<?php
//Average of Number

$num=[12,15,30];
$n=count($num);
$sum=$num[0]+$num[1]+$num[2];


echo "Sum of all numbers <br>";
echo $sum."<br>";
echo "Average of numbers = Sum of numbers/n <br>";
$avg=$sum/$n;
echo $avg;
?>

<h3 style="color:green";>Area of rectangle or Squre</h3>
<pre>
Example:

    $length=5;<br>
    $width=3;<br>

    if($length==0 || $length==0){<br>
        echo "Length or Width cant be 0";<br>
    elseif($length>$width){<br>
        echo"This is Rectangle ";<br>
        $area=$length*$width;
        echo "Area of Rectangle is $area ";<br>
    }elseif($length==$width){<br>
        echo"This is Square ";<br>
        $area=$length*$width;<br>
        echo "Area of square is $area ";<br>
    }else{<br>
        echo " Check the length and width are having real values";<br>
    }<br>
</pre>

<h4>Answer is :</h4>

<?php

//Area of rectangle or Squre

$length=5;
$width=3;
if($length==0 || $length==0){
    echo "Length or Width cant be 0";
}elseif($length>$width){
    echo"<br>This is Rectangle <br>";
    $area=$length*$width;
    echo "Area of Rectangle is $area <br>";
}elseif($length==$width){
    echo"This is Square <br>";
    $area=$length*$width;
    echo "Area of square is $area <br>";
}else{
    echo " Check the length and width are having real values";
}
?>
<h3 style="color:green";>Area of Circle</h3>
<pre>
    $r=3;<br>
    $const=3.14;<br>
    if($r<0){<br>
        echo "Cant calculate area of circle";<br>
    }else{<br>
        $area=$const*$r*$r;<br>
        echo "The area of circle is $area";<br>
    }
</pre>

<h4>Answer is :</h4>

<?php
//Area of Circle

$r=3;
$const=3.14;
if($r<0){
    echo "<br>Cant calculate area of circle";
}else{
    $area=$const*$r*$r;
    echo "<br>The area of circle is $area";
}

?>
<h3 style="color:green";>Indexed Array</h3>
<pre>
    $Colour = ['Red','Blue','Yellow'];<br>
    echo $Colour[2]; <br>
    ?>
</pre>
<br>

<h4>Answer is :</h4>
<?php

$color = array ('red', 'blue', 'yellow');
echo $color[2];
?>
<br>
<h3 style="color:blue";>Associative Array</h3>
<pre>
    $home_towns = array (<br>
    'Nilupa' => 'Galle, Srilanka',<br>
    'Nuwan' => 'Colombo, Srilanka',<br>
    'Keshini' => 'Kandy, Srilanka',<br>
    );<br>
    echo $home_towns['Nuwan'];<br>
</pre>
<?php
//Associative Array
$home_towns = array (
'Nilupa' => 'Galle, Srilanka',
'Nuwan' => 'Colombo, Srilanka',
'Fathema' => 'Dubai, UAE',
);


echo $home_towns['Nuwan'];
?>

<h3 style="color:green";>Loops</h3>
<pre>Here We learn About While Loops, Do..While Loop and for loop<br>
    <b>When we write the code and we want that code to execute again and again we are using Loop</b><br>
    While Loop go through the code of block until the specified codition true<br>
    Do..While loop go through the block of code once and then unti to the condition is true t repearts.<br>
    Here even we didnt met the condtion true its go through one time.<br>
    For Loop go through the block of code a specified numder of times.
</pre>
<h3 style="color:blue";>While Loop</h3>
<pre>
    $start=1;<br>
    while($start<=7){<br>
        echo "I Did my $start day of Fasting<";<br>
        $start++;<br>
    }<br>
    Echo "Hurray, I Completed My Fasting";<br>
</pre>
<h4>Answer is :</h4>
<?php

//While Loop
$start=1;
while($start<=7){
    echo "I Did my $start day of Fasting<br>";
    $start++;
}
Echo "Hurray, I Completed My Fasting";
?>
<h3 style="color:blue";>For Loop</h3>
<pre>
    Here i wrote same while loop in a differant way using for loop<br>
    I initiate , gave condition, then increment withing for()<br>
    According to the logic i can deside where to use For loop, Where to use While Loop.Mostly if i know how many 
    number of times i need to excute , i can use FOR LOOP.

    for($start=0; $start<=7; $start++){<br>
    echo "I Did my $start day of Fasting";<br>
    }<br>
    Echo "Hurray, I Completed My Fasting";
</pre>
<h4>Answer is :</h4>
<?php
//for Loop
for($start=1; $start<=7; $start++){
echo "I Did my $start day of Fasting<br>";
}
Echo "Hurray, I Completed My Fasting";
?>
<h3 style="color:blue";>Do...While Loop</h3>
<pre>
    $start=1;<br>
    do{<br>
    $start++;<br>
    }  while($start<7) ;<br>
    echo "I Did my $start day of Fasting";<br>

    echo "Hurray, I Completed My Fasting";<br>
</pre>
<?php
//Do..While Loop
$start=1;
do{
   $start++;
  }  while($start<7) ;
   echo "I Did my $start day of Fasting<br>";

echo "Hurray, I Completed My Fasting<br>";

?>
<h3 style="color:blue";>For Each Loop</h3>



<?
//Task:
$StudentsMarks=[
   "fathhima" => ["Maths"=>95,"English"=>99,"Science"=>65,"Art"=>93,"Computer Science"=>72],
    "Robert" => ["Maths"=>100,"English"=>99,"Science"=>50,"Art"=>80,"Computer Science"=>30],
    "David" => ["Maths"=>60,"English"=>95,"Science"=>83,"Art"=>98,"Computer Science"=>80],
    "Harsh" => ["Maths"=>99,"English"=>70,"Science"=>60,"Art"=>90,"Computer Science"=>45],
    
];
/*   access each student marks
 $StudentsMarks as $value;
 $value of firstarray
 $value=["Maths"=>95,"English"=>99,"Science"=>65,"Art"=>93,"Computer Science"=>72]......]

 $value of second array
 $innervalue=[95,99,65,93,72];

 
*/

//total of each student = Sum of Inner Values
//Avg Of each Student = Sum / no ofsubjects


//inner value of each array
foreach($StudentsMarks as $key => $value){
        echo $key."<br>";
        $sum = 0;
        $avg = 0;
        
        
        foreach($value as $innerkey => $innervalue){
            
            echo $innerkey. " = " .$innervalue. "<br>";
            $sum+= $innervalue;
            $n=5;
            $avg=$sum/$n;

           
        }
        echo "Total:".$sum."<br>";
        echo"Avg:".$avg."<br>";
        echo" The Highest Mark of ".$key." is  =". $highestmark."<br>";
        echo" The Lowest Mark of ".$key." is  =". $lowestmark."<br>";
        
        echo"<br>";
        echo"<br>";
}




//How to get avaerage of array
$num=[12,15,30];
$n=count($num);
$sum=$num[0]+$num[1]+$num[2];



echo "Sum of all numbers <br>";
echo $sum."<br>";
echo "Average of numbers = Sum of numbers/n <br>";
$avg=$sum/$n;
echo $avg;



?>



</body>
</html>