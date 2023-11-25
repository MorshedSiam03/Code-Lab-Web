<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $notice = $_POST["notice"];

    @include 'dbcon.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the notice into the database
    $sql = "INSERT INTO notices (title, notice) VALUES ('$title', '$notice')";
    $conn->query($sql);
    
    $conn->close();

    // Redirect back to the teacher dashboard after sending the notice
    header("Location: admin_homepage.php");
    header("Location: admin_homepage.php");
    exit;
}
?>


