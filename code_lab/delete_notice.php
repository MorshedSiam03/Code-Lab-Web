<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Create a database connection (replace with your database credentials)
    @include 'dbcon.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Delete the notice from the database
    $sql = "DELETE FROM notices WHERE id = $id";
    $conn->query($sql);
    
    $conn->close();

    // Redirect back to the noticeboard after deleting the notice
    header("Location: admin_homepage.php");
    exit;
}
?>
