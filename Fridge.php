<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindb";
	
// connect the database with the server
$conn = new mysqli($servername,$username,$password,$dbname);
	
	// if error occurs
	if ($conn -> connect_errno)
	{
	echo "Failed to connect to MySQL: " . $conn -> connect_error;
	exit();
	}

	$sql = "select * from fridge";
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
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
	
	#fridges {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#fridges td, #fridges th {
  border: 1px solid #ddd;
  padding: 8px;
}

#fridges tr:nth-child(even){background-color: #f2f2f2;}

#fridges tr:hover {background-color: #ddd;}

	table{
		width: 100%;
	}
	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
	#fridges th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFBF00;
  color: white;
}

</style>

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

<div class="fridge-table" style="display: flex; align-items:center; justify-content:center; margin:50px;">
	<table id="fridges">
		<thead>
			<tr>
				<th>Fridge no</th>
				<th>Capacity</th>
				<th>Location</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
			foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['no']; ?></td>
				<td><?php echo $rows['capacity']; ?></td>
				<td><?php echo $rows['location']; ?></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
	</div>
</body>
</html>

<?php
	mysqli_close($conn);
?>
