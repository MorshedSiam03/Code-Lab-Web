<?php

$token = $_POST["token"];
$token_hash = hash("sha256", $token);

require "dbcon.php";  // Make sure "dbcon.php" returns the $mysqli connection

$sql = "SELECT * FROM student_registration
        WHERE reset_token = ?";

$stmt = $conn->prepare ($sql);

if (!$stmt) {
    die("Prepare failed: " . $mysqli->error);
}

$stmt->bind_param("s", $token_hash);

if (!$stmt->execute()) {
    die("Execute failed: " . $stmt->error);
}

$result = $stmt->get_result();

$user = $result->fetch_assoc();

$stmt->close(); // Close the first prepared statement

if ($user === null) {
    die("Token not found");
}

if (strtotime($user["token_expires"]) <= time()) {
    die("Token has expired");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if (!preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if (!preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password = $_POST['password'];

$sql = "UPDATE student_registration
        SET password = ?,
            reset_token = NULL,
            token_expires = NULL
        WHERE s_id = ?";

$stmt =$conn->prepare($sql);

$stmt->bind_param("ss", $password, $user["s_id"]);

$stmt->execute();

echo "Password updated. You can now login.";      
         

?>
