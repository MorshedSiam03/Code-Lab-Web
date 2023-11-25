<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $notice = $_POST["notice"];

    // Create a database connection (replace with your database credentials)
    @include 'dbcon.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the notice in the database
    $sql = "UPDATE notices SET title = '$title', notice = '$notice' WHERE id = $id";
    $conn->query($sql);
    
    $conn->close();

    // Redirect back to the noticeboard after updating the notice
    header("Location: admin_homepage.php");
    exit;
}
?>
