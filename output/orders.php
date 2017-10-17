<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../main.css">
		<title>NAME Bookstore</title>
		
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "password";
			$database = "bookstore";
			
			$conn = mysqli_connect($servername, $username, $password, $database);
			
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
		?>
	</head>
	<body>
		<div id="head">
			<ul class="nav_bar">
				<li><a href="../index.html">Home</a></li>
				<li><a href="../search.php">Search</a></li>
				<li><a class="active" href="orders.php">Orders</a></li>
				<li style="float:right;"><a href="../additional.html">Additional</a></li>
			</ul>
		</div>
		<div id="wrapper">
			<?php
				if (!empty($_POST['user']) && !empty($_POST['pass'])) {
					//do
				} else {
					echo "<div id=\"input\">";
					echo "    <form method=\"post\" action=\"orders.php\">";
					echo "        <p>Email: </p><input type=\"text\" name=\"user\"><br>";
					echo "        <p>Password: </p><input type=\"password\" name=\"pass\"><br>";
					echo "        <input type=\"submit\" value=\"Log in\">";
					echo "    </form>";
					echo "</div>";
				}
				$conn.close();
			?>
		</div>
		<footer>
			<p>Created in SPS IPT 2017 by Dylan Allen and Robert Cox.</p>
		</footer>
	</body>
</html>