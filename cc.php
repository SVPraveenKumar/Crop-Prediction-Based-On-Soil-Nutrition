<?php
  include "connection.php";
  
?>


<!DOCTYPE>
<html>
<head>
	<title></title>


	

</head>
<body>
<h1>OUTPUT</h1>

<h2>AGRI TABLE</h2>
	<?php
$res=mysqli_query($db,"SELECT * FROM `cropt` where townid='1a';");
		
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "areaid";  echo "</th>";
                echo "<th>"; echo "talukid";  echo "</th>";
                echo "<th>"; echo "townid";  echo "</th>";
                echo "<th>"; echo "agriareaid";  echo "</th>";
                echo "<th>"; echo "agriareaname";  echo "</th>";
			echo "</tr>";	

           
		while($row=mysqli_fetch_assoc($res))
			{
				
				
				echo "<td>"; echo $row['areaid']; echo "</td>";
                echo "<td>"; echo $row['talukid']; echo "</td>";
                echo "<td>"; echo $row['townid']; echo "</td>";
                echo "<td>"; echo $row['agriareaid']; echo "</td>";
                echo "<td>"; echo $row['agriareaname']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
		
    ?>

<h2>ID TABLES</h2>
	<?php
$res=mysqli_query($db,"SELECT * FROM `cropt2` where townid='1a' ");
		
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6;'>";
				//Table header
				
				echo "<th>"; echo "areaid";  echo "</th>";
                echo "<th>"; echo "talukid";  echo "</th>";
                echo "<th>"; echo "townid";  echo "</th>";
                echo "<th>"; echo "cropid";  echo "</th>";
                echo "<th>"; echo "nutrientid";  echo "</th>";
			echo "</tr>";	

           
		while($row=mysqli_fetch_assoc($res))
			{
				
				
				echo "<td>"; echo $row['areaid']; echo "</td>";
                echo "<td>"; echo $row['talukid']; echo "</td>";
                echo "<td>"; echo $row['townid']; echo "</td>";
                echo "<td>"; echo $row['cropid']; echo "</td>";
                echo "<td>"; echo $row['nutrientid']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
		
    ?>
     <div id="a"><a href="logged.php">GO BACK</a></div>
    </body>
</html>