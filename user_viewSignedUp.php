<?php
session_start();
require_once("config.php");
include "navbar.php";


// execute the SQL query
$user_id = $_GET['id'];
$sql = "SELECT c.title
        FROM contents c 
        INNER JOIN signup s ON c.content_id = s.content_id 
        WHERE s.user_id = $user_id";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="viewUser.css">
	<title>View Signed Up Programs | Taytay Agriculture Office</title>
</head>

<body>
<div class="table-container">
	<h2>View Signed Up Programs</h2>
	<table>
		<thead>
		<tr>
			<th>Program Name</th>
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
    }
}else {
    echo "You are not signed up to any programs";
}
?>
        </tbody>
    </table>


</body>
</html>

