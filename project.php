


<!DOCTYPE html>

    <html>
    <head>
        <title>
           EpicVedio
        </title>
        <link rel="stylesheet" href="spa.css">
        <script language="javascript" type="text/javascript">
            function validateForm(){
                var x= document.getElementById("contactform");
                var text="";
                var result= true;
                var i;
                for(i=0;i<x.length;i++) {
                    if(x.elements[i].value==""){
                        result = false;
                        text = "Invalid or missing entry"
                    }
                }
            }

           
            
         </script>
    </head>
    <body>
        <!--Here is our main header which is used all the pages of our website-->
        <header>
            <!--Navigation-->
            <nav>
                <div class="rowh">
                    <!--Logo-->
                    <img src="epicvedio.jpeg" alt="epic logo" class="logo">
                    <!--List-->
                    <ul class="main-nav">
                        <li><a href="#">Movies  </a></li>
                        <li><a href="#">My Profile  </a></li>
                        <li><a href="#">Register   </a></li>
                        <li><a href="#" class="contact">Contact Us  </a></li>  
                    </ul>
                </div>
    
            </nav>
        
            
        </header>
    <div id="firstpage">
        <div class="row">
  
            <div class="main">
           
                <!--Login-->
                <div id="login">

                    <h1>Login</h1>
                    
                    <form action="./login.php" method="post">
                    <table >
                    
                    <tr>
                        <td >User name</td>
                        <td><input type="text" name="username" placeholder="User Name" size="50" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password" placeholder="Password" size="50"required ></td>
                    </tr>
                
                    <tr>
                        <td><input type="submit" id="login" value="Login"></td>
                    </tr>
                    </table>
                
                    
                    
                    </div>
                     <!--Profile-->
                    <div class="container">
                    <h1> My Profile</h1>
                    <div class="rowh">
                        <!--Table for include form-->
                        <table class="Tform">
                            <tr>
                                <th>Create your Own Account</th>
                            </tr> 
                            <tr>
                                <td class="tdform">
                                    <!--Form For Product order-->
                                    <!-- onsubmit="return validateForm()" enctype="text/plain" -->  
                                    <form action="./registration.php" method="post">
                                        <pre>
                
                                            <label for="name"><span class="form-data" >First Name:</span> </label>
                                            <input type="text" name="firstname" placeholder="Please enter your first name" size="20" required>
                                            <label for="name"><span class="form-data" >Last Name:</span> </label>
                                            <input type="text" name="lastname" placeholder="Please enter your first name" size="20" required>
                                            <label for="mobile"><span class="form-data">Mobile Number:</span> </label>
                                            <input type="Number" name="contactno" placeholder="Please enter your mobile number" size="20" required>
                                            <label for="Email"><span class="form-data">Email:</span> </label>
                                            <input type="Email" name="email" placeholder="Please enter your email" size="20" required>
                                           
                                            <label for="movie"><span class="form-data">Prefered Movies:</span> </label>
                               
                                                <select id="movie" name="movie">
                                                    <option value="horror">Horror</option>
                                                    <option value="commedy">Commedy</option>
                                                    <option value="romantic">Romantic</option>
                                                    <option value="kids">Kids</option>
                                                
                                                </select>
                                            <input type="submit" value="Save"> <input type="submit" value="Edit"> <input type="reset">
                                            
                                        </pre>
                                    </form>
                                </td> 
                            </tr>  
                        </table>
                    </div> 
                </div>
            </div>
            
             
            
                <!--Contact us-->
            
            <div class="side">
                <div class="row">
                    <div class="col">
                        <div class="title ">
                            <p class="title-main"> Give Us a Call </p>
                            <h2 class="title-sub">SEND US A MESSAGE.</h2>
                        </div>
                    </div>
                </div>
                <div >
                    <div class="row">
                        <div >
                            <div >
                                <div >
                                    <h3>Contact Us</h3>
                                    <p>Please fill out this form </p>
                                    <form id="contactform" action="./contact.php" method="post" onsubmit="return validateForm()">
                                    <div >
                                        <input type="text" name="name"  placeholder="Your name">
                                    </div>

                                    <div>
                                        <input type="number" name="mobile"  placeholder="Phone Number">
                                    </div>
                                    <div >
                                        <input type="email" name="email"  placeholder="Email">
                                    </div>
                                    <div >
                                        <textarea  id="comments" name="enquiry" placeholder="Message" ></textarea><br>
                                    </div>
                                    <input type="submit" value="SUBMIT" >
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div >
                            <p>Contact us and we'll get back to you within 24 hours.</p>
                            <p><i ></i> Melbourne, Australia</p>
                            <p><i ></i> (03) 45326178</p>
                            <p><i ></i> info@epicvedio.com.au</p> 
                        </div>
                        
                    </div>
                </div>
          
            </div>
                
        </div>
    
    </div>

   <div class="rowh">
         <div >
            <h3>Message</h3>
            
            <form action="">
            
                <div >
                    <textarea  id="comments" name="comments" placeholder="Message" ></textarea><br>
                </div>
                <input type="submit" value="SUBMIT" >
            </form>
        </div>


   </div>
        
    </body>
    <footer class="footer">
           
        <nav class="footer-nav">    
            <a href="https://www.facebook.com/ATMCSOCIAL/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/atmc_australia?lang=en" class="fa fa-twitter"></a>
            
            <p>
                Copyright &copy; 2021 by EpicVedio. All rights reserved.
            </p>
        
        </nav>
    </footer>

</html>