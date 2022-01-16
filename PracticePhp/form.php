<!DOCTYPE >
<html>
    <head>
        <title>Create Form</title>
    </head>
    <body>
        <?php 
            if($_SERVER['REQUEST_METHOD']== 'GET') {?>
            <form action="<?php echo $SERVER['PHP_SHELF'] ?>" method="post">
            <table >
            
            <tr>
                <td >First Name</td>
                <td><input type="text" placeholder="First Name" size="50"></td>
            </tr>
            <tr>
                <td>Surname</td>
                <td><input type="text" placeholder="Surname" ></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="Email" name="Email" ></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" ></td>
            </tr>
            </table>
        
        <?php }
            else if($_SERVER['REQUEST_METHOD']== 'POST'){
            echo ("Form Filled Succuessfully");
            }
            else{
                die("This script only works with get and post requests");
            }
         ?>
        <?php

        $con = mysqli_connect("127.0.0.1","root","Mysql.123","TEST");

        if(mysqli_connect_errno())
        {
            echo "Failed to connect to Database".mysqli_connect_error();
        }else{
            echo "Connected to Database</br>";
            echo "Creating tables in test database</br>";

        }

        ?>

        
    </body>
</html>
