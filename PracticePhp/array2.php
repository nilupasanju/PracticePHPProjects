<div>
        1) Create array of N length and store autogenerted Random numbers.<br>
        2) Find the mean / average of these numbers<br>
        3) Calculate the standard deviation of these numbers<br>
        4) Calculate the variance of these numbers<br>
        5) Calculate the percentile of  given number of that array 
        (the value that a given percent of the values are lower than).<br>
</div>
<?php
//1) Create array of N length and store autogenerted Random numbers.
$array = array();
$min=1;
$max=100;  
        
        $n=10;
        for($i = 0; $i < $n; $i++){
            $array[] = rand($min, $max);
            $c=count($array);
            echo $c."<br>";
            $sum = 0;
            $avg = 0;
            $percentile=0;
            
        //2) Find the mean / average of these numbers<br>   
            foreach ($array as $key =>$value){
                //Sum of inner values form $array
                $sum+= $value;
                $n=10;
                //Average = Sum of Innervalue/number of element in array
                $avg=$sum/$n;

               
            }


           
        }
        // 3) Calculate the standard deviation of these numbers<br>
        function Stand_Deviation($array) {
            $n= count($array);
            
            $variance = 0.0;
            
            // Average using array_sum() method
            $avg=array_sum($array)/$n;
          
            foreach($array as $value)
            {
                
                $variance += pow(($value - $avg), 2);
            }
          
            return (float)sqrt($variance/$n);
            }
          //  4) Calculate the variance of these numbers<br>    
           function Variance($array)
            {
                $variance = 0.0;
                $n= count($array);
                // Calc Mean.
                $avg=array_sum($array)/$n;
        
                foreach ($array as $value ){
                    $variance += pow(abs($value- $avg), 2);
                }
        
                return $variance;
            }
            //5) Calculate the percentile of  given number of that array 
           
                
                

          print_r($array)."<br>";
          echo $value ."<br>";
          echo "Total:".$sum."<br>";
        echo"Avg:".$avg."<br>";
        echo "Sandard Diviation: ";
        print_r(Stand_Deviation($array));
        echo "<br>Varience: ";
        print_r(Variance($array));
        echo "<br>Percentile: ";
        echo $percentile;


      
    // Input array
    
      
    


$num=[12,15,30];
$n=count($num);
$sum=$num[0]+$num[1]+$num[2];

?>
