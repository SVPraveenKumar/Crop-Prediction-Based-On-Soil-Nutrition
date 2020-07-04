<?php
  include "connection.php";
  
?>


<!DOCTYPE>
<html>
<head>
	<title>Books</title>
<style>
background-color: black ;</style>

	

</head>
<body>
<h1>TABLES TO GET ID FOR NAMES</h1>
<h2>STATE</h2>
	<?php
$res=mysqli_query($db,"SELECT * FROM `state`;");
		
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				echo "<th>"; echo "state_id";	echo "</th>";
				
				echo "<th>"; echo "state_name";	echo "</th>";
			echo "</tr>";	

           
		while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";	
				echo "<td>"; echo $row['state_id']; echo "</td>";
				echo "<td>"; echo $row['state_name']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>";
		
    ?>
<h2>DISTRICT</h2>
	<?php
$res=mysqli_query($db,"SELECT * FROM `state1`; ");
		
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "dist_id";  echo "</th>";
				echo "<th>"; echo "dist_name";  echo "</th>";
			echo "</tr>";	

           
		while($row=mysqli_fetch_assoc($res))
			{
				
				
				echo "<td>"; echo $row['dist_id']; echo "</td>";
				echo "<td>"; echo $row['dist_name']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
		
    ?>
    <h2>TOWN</h2>
	<?php
$res=mysqli_query($db,"SELECT * FROM `town`;");
		
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "town_id";  echo "</th>";
				echo "<th>"; echo "town_name";  echo "</th>";
				
			echo "</tr>";	

           
		while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";	
				
				echo "<td>"; echo $row['town_id']; echo "</td>";
				echo "<td>"; echo $row['town_name']; echo "</td>";
				

				echo "</tr>";
			}
		echo "</table>";
		
    ?>
    
     <div id="a"><a href="logged.php">GO BACK</a></div>
</body>
</html>