<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<title>Samridhi</title>
	<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #FFBF00;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
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

</nav>

	<center>
		<h1>Storing Form data in Database</h1>
		<form action="config_donate.php" method="post">
			
<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

			
<p>
			<label for="Email">Email:</label>
			<input type="text" name="Email" id="Email">
			</p>

<p>
			<label for="Ftype">FType:</label>
			<input type="text" name="FType" id="FType">
			</p>
<p>
			<label for="FCondition">FCondition:</label>
			<input type="text" name="FCondition" id="FCondition">
			</p>
<p>
			<label for="CNo">CNo:</label>
			<input type="text" name="CNo" id="FType">
			</p>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="Address" id="Address">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
