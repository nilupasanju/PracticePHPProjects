
<?
//Listing 1-1: Dynamic PHP page creation
// Set a few variables
$site_title = "PHP Notes";
$bg_color = "white";
$user_name = "Nilupa";
$big_font = "h3";
?>
<html>
<head>
<title><? print $site_title; ?></title>
</head>
<body bgcolor="<? print $bg_color; ?>" >
<?
// Display an intro. message with date and user name.
print "
<$big_font>PHP Notes | ".date("F d, Y")." <br>
Greetings, $user_name! <br></$big_font>
";
?>
<h3>Multiple-PHP Script Embedding</h3>
<?
print "Another PHP-enabled page ";
$variable = "Hello World! ";

print $variable; ?>
<h3>Single-Line Comments</h3>
<!--Single-Line Comments-->
<p>// set the color of the roses.</p>
<pre>$rose_color = "red";
# set the color of the violets.
$violet_color = "blue";
print "<br>Roses are $rose_color, violets are $violet_color";</pre>
<?

$rose_color = "red";
# set the color of the violets.
$violet_color = "blue";
print "<br>Roses are $rose_color, violets are $violet_color.<br>";

?>
<h3>String Assignments</h3>
$food = "meatloaf"; </br>
$food = 'meatloaf'; </br>
<?php

$food = "meatloaf";
$food = 'meatloaf'; 

$sentence = "My favorite food is $food";
$sentence2 = 'My favorite food is $food';

echo $sentence."</br>";
echo $sentence2."</br>";

?>
<pre>
SEQUENCE REPRESENTATION
\n Newline <br>
\r Carriage return <br>
\t Horizontal tab <br>
\\ Backslash  <br>
\$ Dollar sign <br>
\” Double-quotation mark <br>
\[0-7]{1,3} Octal notation regular expression pattern <br>
\x[0-9A-Fa-f]{1,2} Hexadecimal notation regular expression patter <br>
<br><br>
$double_list = "item1\nitem2\nitem3";<br>
$single_list = 'item1\nitem2\nitem3'; <br>
</pre>
<?php
$double_list = "item1\nitem2\nitem3";
$single_list = 'item1\nitem2\nitem3'; 

echo $double_list."</br>";
echo $single_list."</br>";

?>

</body>
</html>