<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "logindb");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['Email'];
		$ftype = $_REQUEST['FType'];
		$fcon = $_REQUEST['FCondition'];
		$cno = $_REQUEST['CNo'];
		$address=$_REQUEST['Address'];

		$sql = "INSERT INTO donor VALUES ('$first_name','$last_name','$email','$ftype','$fcon','$cno','$address')";
		
		if(mysqli_query($conn,$sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
                . "$address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
