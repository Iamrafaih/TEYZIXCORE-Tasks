<html><body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Full Name:</strong> " . htmlspecialchars($fullname) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($message) . "</p>";
} else {
    echo "No data submitted.";
}
?>
</body></html>