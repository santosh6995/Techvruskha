<?php
$name = $_POST["name"];
$dob = $_POST["dob"];
$college = $_POST["college"];
$usn = $_POST["usn"];
$password=$_POST["password"];
$sem = $_POST["sem"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];

$return1=preg_match("/^[1-4]{1}[a-z]{2}\d{2}[a-z]{2}\d{3}$/",$usn);
$return2=preg_match("/^[A-Za-z]+$/",$college);
$return3=preg_match("/^([A-Za-z]|[0-9]|[_]|[.]|[-]|['+'])+\@[A-Za-z]+\.[A-Za-z]+$/",$email);
$return4=preg_match("/^[0-9]{10}$/",$mobile);
$return5=preg_match("/^[1-8]{1}[th]*$/",$sem);
$return6=  preg_match("/^[A-Za-z]*[.]*[A-Za-z]*[.]*[A-Za-z]{3}[A-Za-z]*[.]*[A-Za-z]*[.]*[A-Za-z]*[.]*$/", $name);

mysql_connect("localhost", "root") or die("can't connect");
mysql_select_db("registration") or die("can't select registration db");

if($return1&&$return2&&$return3&&$return4&&$return5&&$return6)
{
if($name&&$college&&$dob&&$email&&$mobile&&$usn&&$sem)
{
mysql_query("insert into user1 values(NULL,'$name','$dob','$usn','$password','$sem','$email','$mobile','$college')") or die("query failed");
//mysql_query("select * from user1");
header("Location:success.xhtml");
}
 else {
echo "unsuccessful";   
}
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>REGISTRATION PAGE</title>

<link href="newuser_css.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
        <!-- for menu on top of page-->
	<div id="menu_panel">
    	<div id="menu_section">

              
            <ul> <li><big><strong>WELCOME TO CSE TECH FORUM</strong></big></li>
                <a href="login_html.html"><img class="pic1" src="images/logo.jpg" width="400" alt="" align="left" /></a>
                <li><a href="login_html.html" >Home</a></li>
                <li><a href="loginlinknewuser.xhtml">Register</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Gallery</a></li>  
                <li><a href="Login_html.html">Login</a></li>                     
            </ul> 
		</div>
    </div>  <!--end of menu -->


<div id="header_content_container"><!-- for entire background and alignment-->
 <div id="header_section"><!-- logo+name formate-->
    
  <!--techvrukshalogo-->
  <div id="title_section_left"></div>

  <div id="title_section">TECH VRUKSHA</div><!--web name-->
         

 </div>
        
       <div id="content"><!--all box alignment-->
           <div id="content_left"> <!--boxes alignment-->
				
              <div class="post">
                   <div class="post_body">
                        <div id="banner" class="container">



	                                      <div id="slider">
                                                  <div class="post_title"></div>
		                                 <div class="viewer">
                                                     <div class="post_title">
       <?php if(!$return1){
   echo 'INVALID USN<br><br>
      registration failed<br><br>go back and register again<br><br> with proper details';}
    

 elseif(!$return2){
  echo 'INVALID COLLEGE NAME<br><br>
      registration failed<br><br>go back and register again<br><br>with proper details';
    
 }
 
   
elseif(!$return3){
   echo'INVALID EMAIL ID<br><br>
   registration failed<br><br> go back and register again<br><br> with proper details';
    }
    
elseif(!$return4){
   echo 'INVALID MOBILE NUMBER<br><br> ENTER ONLY 10 DIGITS <br><br>WITHOUT PREFIXING ANY ZEROS<br><br>
    registration failed <br><br> go back and register again<br><br> with proper details';
    }

elseif(!$return5){
    echo 'INVALID SEM<br><br>
    registration failed<br><br> go back and register again<br><br> with proper details';
    }
    
elseif(!$return6){
    echo 'INVALID NAME,ENTER CORRECT DETAILS<br><br>
    registration failed<br><br> go back and register again<br><br> with proper details';
    }
    else {
        echo 'ENTERTED DETAILES ARE INVALID<br><br>
        registration failed<br><br> go back and register again<br><br> with proper details';
    }?>
    </div>
                                                 </div>
                                              </div>

                        </div> <!-- end of post two -->
                   </div>
              </div>
               

                
           </div>   <!--end of content left -->
        
            <div id="content_right">
            
            	<div class="right_section">
                	<h2>About us</h2>
		    <ul>
                        <li><a href="#">BITM</a></li>
                     
                        <li><a href="#">CSE</a></li>
                       
                    </ul>    
                </div>
                
           
                
                   <div class="right_section">
    <h2>Activities</h2>
    <ul>
        <li><abbr title="LOGIN TO VIEW"><a href="#">Activity 1</a></abbr></li>
        <li><abbr title="LOGIN TO VIEW"><a href="#">Activity 2</a></abbr></li>
        <li><abbr title="LOGIN TO VIEW"><a href="#">Activity 3</a></abbr></li>
        <li><abbr title="LOGIN TO VIEW"><a href="#">Activity 4</a></abbr></li>
    
    </ul>
   </div>
                
            </div>  <!--end of right content -->
	    </div> <!-- end of content -->
    </div>  <!--end of content container -->

	<div id="bottom_panel">
    	<div id="bottom_section">
        
	        <div class="bottom_section_content">
                <h3>Gallery</h3>
                <ul class="gallery">
                	<li><a href="#"><img src="images/thumb1.jpg" alt="image name" /></a></li>
                    <li><a href="#"><img src="images/thumb2.jpg" alt="image name" /></a></li>
                    <li><a href="#"><img src="images/thumb3.jpg" alt="image name" /></a></li>
                    <li><a href="#"><img src="images/thumb3.jpg" alt="image name" /></a></li>
                    <li><a href="#"><img src="images/thumb2.jpg" alt="image name" /></a></li>
                    <li><a href="#"><img src="images/thumb1.jpg" alt="image name" /></a></li>
                </ul>
            </div>
          <abbr title="Lakshmikanth.B">
            <div class="bottom_section_content">
                <h3>POWERED BY</h3>
                <ul class="list_section">
                    <li><a href="#">Lakshmikanth.B</a></li>
                    <li><a href="#">Santosh.M</a></li>
                    <li><a href="#">Sharath.S</a></li>
                    <li><a href="#">Shivaprasad</a></li>
                </ul>
            </div></abbr>
            
            <div class="bottom_section_content">
                <h3>Other Links</h3>
                 <ul class="list_section">
                    
                    <li><a href="#">About</a></li>                 
                    <li><a href="#">Contact</a></li>
                  
                    
                </ul>
               
            </div>
            
        </div> <!-- end of bottom section -->
    </div> <!-- end of bottom panel -->
   <abbr title="Lakshmikanth.B">
<div id="footer_panel">
    	<div id="footer_section">
			Copyright © 2099 <a href="#">BITM</a> |
            <a href="#" >Website</a> by CSE STUDENTS 2015
        </div>
</div></abbr>
</body> 
</html>