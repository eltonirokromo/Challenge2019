<?php
 $dbhost = "localhost:8889";
 $dbuser = "root";
 $dbpass = "root";
 $db = "apen";

$con = mysqli_connect($dbhost, $dbuser, $dbpass);
	
	if (!$con) {
		echo "not connected to server";
		# code...
	}
	else
	{
		echo "connected<br>";
	}

	if(!mysqli_select_db($con,$db)){
		echo "database not selected";
	}


 $omschrijving = $_POST['soort'];


$sql = "INSERT INTO leefgebied (omschrijving) VALUES ('$omschrijving')";
if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

   header("refresh:2; url=index.php");
?>
