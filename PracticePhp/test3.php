<?php

$br = "<br>";

$hello = "Nilupa";

Length: echo strlen($hello).$br;

/* array ["N","i","l","p","a"]
         [ 0  ,1 , 2 , 3,  4 ]

    want [ 4, 3, 2, 1,  0]   
    
         [strlen-1,strlen-2,strlen-3,strlen-4,strlen-5]
         [i = strlen-1, i>= 0, i--]*/

$x =strlen($hello);
for ($i=$x-1;$i>=0;$i--)
{
    $revvalue= $hello[$i];
   echo $revvalue;
}


?>

