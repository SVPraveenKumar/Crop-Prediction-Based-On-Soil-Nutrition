<?php
include "connection.php";
?>


<?php
$conn = new mysqli("localhost","root","","crop");
if($conn->connect_error)
die("not connected:".$conn->connect_error);



if(isset($_POST['submit'])){

	$dit=$_POST['district'];
	
    $sql = "SELECT * from database11 where town='$dit'";
  
$result=$conn->query($sql);
if($result==false){
	echo $conn->error;
}

  $row=$result->fetch_assoc();
  
  $sql = "SELECT * from database2 where town='$dit'";
  
$result=$conn->query($sql);
if($result==false){
	echo $conn->error;
}

	$row1=$result->fetch_assoc();
  $per= $row['percentage'];
  $nut=$row['nutrient_name'];
  $crop=$row1['cropname'];
    header("Location:final.php?per=$per&nut=$nut&crop=$crop");
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<script>
var stateObject = {
"Andhra Pradesh": {
"VIjayawada": ["jaggayampeta", "tenali"],
"rajahmundry": ["gokavaram", "korukonda"],
"west godavari": ["bhimavaram", "kothapalli"],
"east godavri": ["annavaram", "amalapuram"],
"vijag": ["gajuwaka", "anakapalli"],
},
"Tamilnadu": {
"Coimbatore": ["madukarai", "ettimadai"],
"chennai": ["avadi", "navalur"],
"salem": ["mallur", "rasipuram"],
"erode": ["kanakapuram", "pudur"],
"trichy": ["samayapuram", "gundur"],


},

 "Telangana": {
"rangareddy": ["sangareddy", "lb nagar"],
"nizamabad": ["armoor", "naval"],
"medak": ["Rangareddy", "Ranga"],
"khammam": ["bonakal", "thanikella"],
"warangal": ["hanumakonda", "arepally"],


},
"Kerala": {
"Kochi": ["valummel", "ernakulam"],
"kottayam": ["perumbaikad", "chungam"],
"trivandram": ["ullor", "pattom"],
"kozhikode": ["kuttichira", "chalapuram"],


},
"Karnataka": {
"Banglore": ["Elecrtonic City", "main city"],
"Mysur": ["Coorg", "Madikeri"],
"Bellary": ["Sanduru", "Kudligi"],
"Bidar": ["Bhalki", "Aurad"],
"Kolar": ["Kolar gold fields", "Arikunte"],


},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
/*if(this.value=='Andhra Pradesh'){
	console.log('India');
document.getElementById("back").style.backgroundImage='url(images/a.JPG)';
}
*/
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
var el_up = document.getElementById("GFG_UP"); 

            var el_down = document.getElementById("GFG_DOWN"); 

            var str = "Click on button to change the background color"; 

          

            el_up.innerHTML = str; 

          

            function changeColor(color) { 

                document.body.style.background = color; 

            } 

              

            function gfg_Run() { 

                changeColor('yellow'); 

                el_down.innerHTML = "Background Color changed"; 

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
   
     background-image:url("images/ind.jpg");
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
        
        
        <title>crop prediction</title>
       
        
    </head>
    <body>
<script src="scripts.js" type="text/javscript">
<!– code placed here will not be executed!
</script>
        <div class="header">
            <div class="inner-header">
                   
                  <div id="c"> <a href="index.php">LOG OUT</a></div>
                    <div id="c"> <a href="display.php">DETAILS</a></div>
               
                    

            </div>
        </div>
        <div class="content" id="back">
            
            <div class="banner-image">
                <div class="inner-banner-image">
                    
                    <div class="banner_content">
                        <div class="container">
  <h1>ENTER BELOW DETAILS</h1>
  
  <form name="myform" id="myForm" method="POST" >
Select state: <select onclick = "gfg_Run() name="state" id="countySel" size="1">
<option value="" selected="selected">Select Country</option>
</select>
<br>
<br>
Select district: <select name="countrya" id="stateSel" size="1">
<option value="" selected="selected">Please select Country first</option>
</select>
<br>
<br>
Select town: <select name="district" id="districtSel" size="1">
<option value="" selected="selected">Please select State first</option>
</select><br><br>
 <input class="btn btn-default" type="submit"  onsubmit="validate()" name="submit" value="Check" style="color: black; width: 70px; height: 30px"> </div>
</form>
  


</div>
                    </div>
                       
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

/*if(isset($_POST['submit']))
{
  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `cropt` WHERE areaid='$_POST[areaid]' && talukid='$_POST[talukid]' && townid='$_POST[townid]';");
  
  $row= mysqli_fetch_assoc($res);
  $count=mysqli_num_rows($res);

  if($count==0)
  {
    ?>
          
          <script type="text/javascript">
            alert("The area,taluk,town doesnot exist");
          </script> 
          
      
    <?php
  }
  else
  {
    $_SESSION['login_user'] = $_POST['townid'];
    $_SESSION['pic']= $row['pic'];

    ?>
      <script type="text/javascript">
        window.location="cc.php"
      </script>
    <?php
  }
}*/

?>
    </body>
</html>


