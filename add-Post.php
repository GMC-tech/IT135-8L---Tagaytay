<?php
// Start session
global $conn;
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_type'])) {
    header("Location: logIn.php");
    exit;
}

// Include database connection
include "config.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $categoryid = mysqli_real_escape_string($conn, $_POST['category']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $headline = mysqli_real_escape_string($conn, $_POST['headline']);
    $date_posted = date("Y-m-d H:i:s");
    $user_type = $_SESSION['user_type'];
    

    // Check if an image is uploaded
    if (isset($_FILES['image-upload']) && $_FILES['image-upload']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image-upload'];
        $targetDirectory = "";
        $targetFile = $targetDirectory . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $targetFile);
    } else {
        $targetFile = "";
    }

    // Insert the post into the database
    $sql = "INSERT INTO contents (title, user_id, description, category_id, img, date_posted, headline)
            VALUES ('{$title}', '{$user_type}', '{$description}', '{$categoryid}', '{$targetFile}', '{$date_posted}', '{$headline}');";

    if (mysqli_query($conn, $sql)) {
        // Redirect to the manage posts page
        header("Location: admin-managePost.php");
        exit;
    } else {
        // Show an error message
        echo "Error: " . mysqli_error($conn);
    }
}
?>
