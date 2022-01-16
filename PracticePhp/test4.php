<html>
    <head>
        <title>Php Function</title> 
    </head>
    <body>
        <?php //create function
            function printmessage(){
                echo "Hi there How are you?";
            }
            printmessage();
        ?>
        <br>
        <?php //function with parameters
            $br ="<br>";
            function hello($name){

                $result="Hi $name  How are You? ";
                echo $result;
              
            }
            $name = "Renuka";
            hello($name);
         ?>
         <br>
        <?php
            function hello2($name,$age){
                $result = "Hi $name this your first step to change life. But your still
                $age years young.";
                echo $result;

            }
            $myname = "Keshini";
            $myage= 8;
            hello2($myname,$myage);
            hello($name);

        ?>
        <br>
        <?php //function with return 
            function add($num1,$num2){
                $result = $num1 + $num2;
                return $result;
            }

            $num1=254;
            $num2=897;
            $result=($num1 + $num2);
            echo $result;

        ?>
   </body> 

</html>