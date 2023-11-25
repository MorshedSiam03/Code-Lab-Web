<?php

$email = $_POST['email'];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

 require "dbcon.php";

$sql = "UPDATE student_registration
        SET reset_token = ?,
            token_expires = ?
        WHERE email = ?";

$stmt = $conn->prepare ($sql);

$stmt->bind_param ("sss", $token_hash, $expiry, $email);

$stmt->execute();

if ($conn->affected_rows) {

    $mail = require "mailer.php";

    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = 'Password Reset Link From CodeLab';
    $mail->Body    = "We have got a request from you to reset your password!<br>
    Click the link below:<br>
    <a href='http://localhost/php_mail/reset-password.php?token=$token'>Reset Password</a>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   // END;

    try {

        $mail->send();

    } catch (Exception $e) {

        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";

    }

}

echo "Message sent, please check your inbox.";
?>