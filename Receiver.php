<?php

$user = "root";
$password = "";
$database = "logindb";
$servername="localhost";
$conn = new mysqli($servername,$user,$password,$database);


if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}        

$sql = "select * from donor";
    $result = ($conn->query($sql));
    //declare array to store the data of database
    $row = []; 
  
    if ($result->num_rows > 0) 
    {
        // fetch all data from db into array 
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Samridhi</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }

        #receive {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#receive td, #receive th {
  border: 1px solid #ddd;
  padding: 8px;
}

#receive tr:nth-child(even){background-color: #f2f2f2;}

#receive tr:hover {background-color: #ddd;}

	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
	#receive th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFBF00;
  color: white;
}
    </style>
</head>
<body>
<nav class="navbar" style="background-color: #FFBF00;">
    <!-- Navbar content -->
          <!-- As a heading -->
  <nav class="navbar">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">Samridhi</span>
    </div>
  </nav>

  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: black;">Logout</a>
    </li>
  </ul>
</nav>

    <table id= "receive" style="width:90%; margin:50px;">
        <thead>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email Id</th>
            <th>Food Type</th>
            <th>Contact No</th>
            <th>Food Condition</th>
            <th>Address</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        if(!empty($row))
            foreach($row as $rows)
            {
        ?>
        <tr>
            <td><?php echo $rows['first_name']; ?></td>
            <td><?php echo $rows['last_name']; ?></td>
            <td><?php echo $rows['Email']; ?></td>
            <td><?php echo $rows['FType']; ?></td>
            <td><?php echo $rows['FCondition']; ?></td>
            <td><?php echo $rows['CNo']; ?></td>
            <td><?php echo $rows['Address']; ?></td>
        </tr>
        <?php } ?>
        </tbody>


    </table>
</body>
</html>

<?php
            mysqli_close($conn);
        ?>