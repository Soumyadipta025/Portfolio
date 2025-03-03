<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = "yourpassword";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  
    

    $sql = "UPDATE users SET password='$hashedPassword' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form method="post">
    Email: <input type="email" name="email" required><br>
    New Password: <input type="password" name="new_password" required><br>
    <input type="submit" value="submit">
</form>
