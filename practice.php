<?php

$random=rand();
echo"Random number = ". $random;


?>
<!Doctype html>
    <html>
        <head>
            <title >Resources PHP</title>
        </head>
    <body>
        <h1>Learning Resources PHP</h1>
        <br>
        <br>
        <pre>
            PHP is a programming language which can use make website more dynamically.
            here are vast of resourses i reffered.

        </pre>
        <div>
            <ul>
                <li><a href="https://assets.ctfassets.net/nkydfjx48olf/5qFMF3mvitLMahX67i7iOb/028229996c13cbc27a0538f055a41b46/php_cookbook.pdf">PHP programming Cook book</a></li>
                 <li><a href="http://www.toves.org/books/php/ch14-sessions/index.html">Programmig Via PHP</a></li>
                <li><a href="http://phptopdf.com/examples/">Php to Pdf </a></li>
                <li><a href="https://doc.lagout.org/programmation/Learning%20PHP%2C%20MySQL%2C%20Javascript%2C%20CSS%20%26%20HTML5%20%283rd%20ed.%29%20%5BNixon%202014-06-16%5D.pdf">Learning PHP,MySQL,Javascript, CSS and HTML</a></li>
                <li><a href="https://www.webstepbook.com/supplements/slides/ch05-php.pdf">Web Programming Step by Step</a></li>
                <li><a href="https://ptgmedia.pearsoncmg.com/images/9780672325618/samplepages/0672325616.pdf">Advanced Php Programme</a></li>
                <li><a href="file:///Users/nilu/Downloads/0061-course-php-programming-language.pdf">Course PHP Language</a></li>
                <li><a href="https://researchdesignlab.com/projects/Integrating%20PHP%20with%20Embedded%20System.pdf">PHP LAB MAnual</a></li>
                <li><a href="http://users.cs.cf.ac.uk/Dave.Marshall/Internet/Lectures/24_CM0133_PHP_Programming.pdf">PHP slides 1</a></li>
                <li><a href="https://users.cs.cf.ac.uk/Dave.Marshall/Internet/Lectures/PHP_Handout_PF.pdf">PHP Slides 2</a></li>
                <li><a href="http://www.ptutorial.com/php-programs-examples-with-output-pdf">ptutorial</a></li>
                <li><a href="file:///Users/nilu/Downloads/PHP_PROGRAMMING_NOTES.pdf">Php PHP_PROGRAMMING_NOTES</a></li>
            </ul>

            <h3> There are many PHP practice Websites </h3>

            <ul>
                <li><a href="https://simpletocompute.files.wordpress.com/2020/02/php-lab-exercise.pdf">PHP Exersice 1</a></li>
                <li><a href="http://math.hws.edu/eck/cs120/s02/lab10/">PHP Exersice 2</a></li>
                <li><a href="https://www.webstepbook.com/supplements/labsection/lab4-buyagrade/">PHP Exersice 3</a></li>
                <li><a href="https://www.etutorialspoint.com/index.php/exercise/php-exercise">PHP Exersice 4</a>
                <li><a href="https://tutorialsclass.com/exercises/php/php-all-exercises-assignments/page/2/">PHP Exersice 5</a></li>
                <li><a href="https://www.w3resource.com/php-exercises/">PHP Exersice 6</a></li>
                <li><a href="http://www2.southeastern.edu/Academics/Faculty/kyang/Cmps401/P4Php/Doc/P4Php.pdf">PHP Exersice 7</a></li>
                <li><a href="http://6.470.scripts.mit.edu/2013/assets/resources/PHP_exercises_2013.pdf">PHP Exersice 8</a></li>
                <li><a href="https://scholar.cu.edu.eg/?q=ehesham/files/webchap9.pdf">Developer Practice PHP</a></li>
                <li><a href="file:///Users/nilu/Downloads/php-programs-examples-with-output-pdf.pdf">Php Examples</a></li>
            </ul>


        </div>
        <div>

            <h5> Practice 1 (For Loop)</h5>
            <pre>PHP genarate 10 random Numbers Using loop. Here we create 2 varibles
            $min and $ max<br>
            call function rand() and save result in $r<br>
            $min=5;<br>
                $max=100;<br>

                echo "Number between 10 to 100 ";<br>

                for($i=0;$i<=10;$i++){<br>
                    $r=rand($min,$max);<br>
                    printf("Number =%d",$r);<br>
                }<br>

                
            </pre>
            <?php
                $min=5;
                $max=100;

                echo "Number between 10 to 100 </br>";

                for($i=0;$i<=10;$i++){
                    $r=rand($min,$max);
                    printf("Number =%d<br>",$r);
                }

            ?>
        </div>

        <div>
            <h5>Practice 2 (PHP MAIL function)</h5>
            <?php
            if(!isset($_POST['submit'])){
            ?>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input name="name" type="text" required></td>
                    </tr>
                        <td>Email:</td>
                        <td><input name="email" type="email" required></td>
                    <tr>
                        <td>Message:</td>
                        <td><textarea name="message" required></textarea></td>
                    </tr>
                    <tr>
                        <td><button name="reset" value="Reset" >Reset</button></td>
                        <td><button name="submit" value="Submit" >Submit</button></td>
                    </tr>
                    
                </table>
            </form>
            <?php
            }else{
                if(isset($_POST["submit"])){
                    $from = $_POST["name"];//sender
                    $subject= $_POST["email"];
                    $message= $_POST["message"];
                    mail("nilupa.sanju@gmail.com",$subject,$message,"From: $from\n");
                    echo "Thanks";
                }
            }
            ?>
        </div>
        <div>
            <h5>Practice 3 (Greeting Form)</h5>
            
            <?php
                if (isset($_POST['sendname'])) {
                    $name = trim($_POST['name']);
                    if (empty($name)) {
                        $name = 'stranger';
                    }
                    $hour = date('G');
                    if ($hour > 23 || $hour < 5) {
                        $greeting = "Wow, you're up late,";
                    } elseif ($hour < 7) {
                        $greeting = 'Good morning, early-bird,';
                    } elseif ($hour < 12) {
                        $greeting = 'Good morning,';
                    } elseif ($hour < 18) {
                        $greeting = 'Good afternoon,';
                    } else {
                        $greeting = 'Good evening,';
                    }
                }
            ?>
            <h1>Welcome</h1>
            <?php if (isset($name)) { 
                echo "<p>$greeting $name</p>";
            } else {
            ?>
            <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <p>
                    <label for="name">Enter your name:</label>
                    <input type="text" name="name" id="name">
                </p>
                <p>
                    <input type="submit" name="sendname" id="sendname" value="Submit">
                </p>
            </form>
            <?php } ?>
        </div>
        <div>
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


            echo $home_towns['Nuwan'];



            ?>
        </div>
        <div>
            <h3>Create Form</h3>
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
        </div>
        <div>
            <h3>input a number and check positive negative or zero using switch case</h3>
            <input type="text" name="$number">
             <?php

                //input a number and check positive negative or zero using switch case

                $number;
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
        </div>
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
        <div>
            <?php
                $num="2.75";
                $int= (int)$num;
                echo $int;

            ?>
        </div>




    </body>
</html>
