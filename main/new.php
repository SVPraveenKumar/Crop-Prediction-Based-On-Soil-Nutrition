<?php

$conn = new mysqli("localhost","root","","crop");
if($conn->connect_error)
die("not connected:".$conn->connect_error);



if(isset($_POST['submit'])){

    $dit=$_POST['district'];
    $sql = "SELECT percent from btest where district='$dit'";
$result=$conn->query($sql);
    $row=$result->fetch_assoc();
    echo $row['percent'];
}

?>