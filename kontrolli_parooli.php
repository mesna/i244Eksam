<?php
	include("db_conn.php");
	if (isset($_POST['kontrolli'])) {
		if (empty($_POST['parool'])) {
			header("Location: index.php");
		}
		else {
			$parool = htmlspecialchars(mysqli_real_escape_string($connection, $_POST['parool']));
			$query = mysqli_query($connection, "SELECT * FROM mesna_i244eksam WHERE password='$parool'");
			$rows = mysqli_num_rows($query);
			if ($rows == 1) {
				echo "Sobib";
			}
			else {
				header("Location: index.php");
			}
			mysqli_close($connection);
		}
	}
	else {
		header("Location: index.php");
	}
?>