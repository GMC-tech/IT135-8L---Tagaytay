<?php
session_start();
require_once("config.php");
include "admin-navbar.php";

$result = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `user_id` DESC");
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="viewUser.css">
	<title>Document</title>
</head>

<body>
<div class="table-container">
	<h2>View Users</h2>
	<a class="add-link" href="addUser.php">Add New Data</a>
	<table>
		<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php

		while ($query = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$query['first_name']."</td>";
			echo "<td>".$query['last_name']."</td>";;	
            echo "<td>".$query['username']."</td>";
			echo "<td>".$query['email']."</td>";;	

			echo "<td> <span class='HiddenText'>".$query['password']."</span></td>";
			echo "<td><a href=\"editUser.php?id=$query[user_id]\">Edit</a> | 
			<a href=\"delete.php?id=$query[user_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
		</tbody>
	</table>

	    <!-- Footer -->

</body>
</html>

