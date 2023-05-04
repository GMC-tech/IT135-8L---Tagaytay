<?php
session_start();
require_once("config.php");
include "admin-navbar.php";


// execute the SQL query
//$user_id = $_GET['id'];
$sql = "SELECT c.title, u.username, u.first_name, u.last_name 
        FROM contents c 
        INNER JOIN signup s ON c.content_id = s.content_id 
        INNER JOIN users u ON s.user_id = u.user_id
        ORDER BY c.title";
        


$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="viewUser.css">
	<title>View Signed Up Programs | Taytay Agriculture Office</title>
</head>

<body>
<div class="table-container">
	<h2>View All Program Sign Ups</h2>
	<table>
		<thead>
		<tr>
			<th>Program Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
		</tr>
		</thead>
		<tbody>
<?php
// check if there are any results
if (mysqli_num_rows($result) > 0) {
    // output the data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row['last_name']."</td>";
    }
}else {
    echo "No one signed up to any programs";
}
?>
        </tbody>
    </table>


</body>
</html>

