<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'drug dispensing';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username_reg'];
    $password = $_POST['password_reg'];
    $user_type = $_POST['user_type'];
    $email = $_POST['email_reg'];
    $phone = $_POST['phone_reg'];

    // Insert the new user into the database
    $query = "INSERT INTO users (username, password, user_type, email, phone) VALUES ('$username', '$password', '$user_type', '$email', '$phone')";
    if (mysqli_query($conn, $query)) {
        echo 'Registration successful.';
    } else {
        echo 'Error registering user: ' . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>