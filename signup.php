﻿<?php
include "connection.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<script>
        function validate() {
  var name = document.forms["myform"]["name"].value;
  var purpose = document.forms["myform"]["purpose"].value;
  if (name == null || name == "") {
    alert("Name can't be blank");
    return false;
  }
  else if (purpose == null || pupose == "") {
    alert("PLEASE mention your purpose");
    return false;
  }
  else{
    return true;
  }
}



    </script>
    <head>
        <style>
         body{    
    width: 100%;    
    height: 100%;    
    margin: 0;
} 
 
a{     text-decoration: none; 
       background-color: transparent;  
       color:#ededed;
} 
.header{
     background-color:#000;   
     color:#fff;    
     border-color: #080808;   
     min-height: 50px;    
     border: 1px solid transparent; 
}
.inner-head{
     width:80%;     
     margin:auto; 
}
#a{
     float: left;   
     height: 50px;  
     padding: 15px;   
     font-size: 20px;  
     font-weight: bold;
     color: white;
}
#b{
     float:right;     font-size:14px;     height: 50px;     padding: 15px 15px;     font-size:16px;     font-weight: bold; 
}
#c{
     float:right;     font-size:14px;     height: 50px;     padding: 15px 15px;     font-size:16px;     font-weight: bold; 
}
.content{
   
     background-image:url("images/S.jpg");
        min-height:600px;
        background-size: cover;
}
.banner-image{
    
     padding-bottom: 50px;     margin-bottom: 20px;     text-align: center;     color: #f8f8f8;     background: url(image_name) no-repeat center;     background-size: cover; 
}
.inner-banner-image{
   
     padding-top: 12%;     width:80%;     margin:auto; 
}
.banner_content{
    
    position: relative;     padding-top: 6%;     padding-bottom: 6%;     overflow:hidden;     margin-bottom: 12%;     background-color: rgba(0, 0, 0, 0.7);     max-width: 660px;
}


.container{
     width:90%;     margin:auto;     overflow:hidden; 
}


footer{
     background-color: #000;     color:#fff;     font-size:20px; 
}
        </style>
        
        <title>amrita viswa vidyapeetham</title>
       
        
    </head>
    <body>
<script src="scripts.js" type="text/javscript">
<!– code placed here will not be executed!
</script>
        <div class="header">
            <div class="inner-header">
                    <div id="a"><a">CROP PREDICTION BASED ON SOIL NUTRITION</a></div>
                  
                    <div id="c"> <a href="login.php">LOGIN</a></div>
                    
                     <div id="b"><a href="index.php">HOME</a></div>

            </div>
        </div>
        <div class="content">
            
            <div class="banner-image">
                <div class="inner-banner-image">
                    <center>
                    <div class="banner_content">
                        <div class="container">
  <h1>ENTER BELOW DETAILS</h1>
  
  <form name="Registration" action="" method="post">
        <ul>
        <div class="login">
        <li>NAME: <input class="form-control" type="text" name="name" placeholder="Name" required=""> <br><br><br>
        <li>PHONENO: <input class="form-control" type="text" name="phoneno" placeholder="phoneno" required=""> <br><br><br>
        <li>USERNAME: <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br><br><br>
        <li>PASSWORD: <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br><br><br>
</ul>

          <input class="btn btn-default" type="submit"  onsubmit="validate()" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>


</div>
                    </div>
                        </center>
                </div>
              
            </div>
            
        </div>
        <div class="container">
            
        <footer>
            <center>
            <div class="container"> Content is “Copyright ©Crop Prediction. All Rights Reserved | Contact Us: +91 90000 00000</div>
            </center>
        </footer>
        <?php

if(isset($_POST['submit']))
{
  $count=0;
  $sql="SELECT username from `signup`";
  $res=mysqli_query($db,$sql);

  while($row=mysqli_fetch_assoc($res))
  {
    if($row['username']==$_POST['username'])
    {
      $count=$count+1;
    }
  }
  if($count==0)
  {
    mysqli_query($db,"INSERT INTO `signup` VALUES('$_POST[name]', '$_POST[phoneno]', '$_POST[username]', '$_POST[password]');");
  ?>
    <script >
     alert("Registrated successful");
    </script>
    
  <?php
  }
  else
  {

    ?>
      <script type="text/javascript">
        alert("The username already exist.");
      </script>
      
    <?php

  }

}

?>

    </body>
</html>
