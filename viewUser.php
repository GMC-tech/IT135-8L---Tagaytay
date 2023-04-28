<?php
session_start();
require_once("config.php");
include "admin-navbar.php";

$result = mysqli_query($conn, "SELECT * FROM `users` ORDER BY `user_id` DESC");
?>

<html>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="viewUser.css">	
	<title>Manage Users | Taytay Agriculture Office</title>
</head>

<body>

	<div class="start"></div>
	
	<div class="view-user-heading">
		<h1>MANAGE USERS</h1>

    </div>
	<div class="view-user-container">
		<div class="view-user-table">
			<table>
				<tr>
					<td><strong>First Name</strong></td>
					<td><strong>Last Name</strong></td>
					<td><strong>User Type</strong></td>
					<td><strong>Username</strong></td>
					<td><strong>Email</strong></td>
					<td><strong>Password</strong></td>
					<td><strong>Action</strong></td>
				</tr>
                
			
				<?php

				while ($query = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$query['first_name']."</td>";
					echo "<td>".$query['last_name']."</td>";
					if($query['user_type']==0){
						echo "<td>User</td>";
					}else{
						echo "<td>Admin</td>";
					}	
					echo "<td>".$query['username']."</td>";
					echo "<td>".$query['email']."</td>";	
					echo "<td>".$query['password']."</td>";
					echo "<td><a href=\"editUser.php?id=$query[user_id]\">Edit</a> | 
					<a href=\"delete.php?id=$query[user_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				}
				?>
			</table>
		</div>
	</div>

	<div class="end"></div>

</body>
</html>
<?php include "admin-footer.html"; ?>