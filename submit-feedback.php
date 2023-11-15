
<?php
// Include the connection file
require_once 'connection.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert feedback into the database
$query = "INSERT INTO feedbacks (name, email, message) VALUES ('$name', '$email', '$message')";
if ($database->query($query) === TRUE) {
    //echo "Thank you for your feedback!";
    echo '<script type="text/javascript">';
echo 'alert("Thank you for your feedback!");';
echo '</script>';
} else {
    echo "Error: " . $query . "<br>" . $database->error;
}

$database->close();
?>