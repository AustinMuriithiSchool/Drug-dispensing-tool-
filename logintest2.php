<?php
session_start();
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'drug dispensing';

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the provided username and password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_type'] = $user['user_type'];

        // Redirect to the appropriate page based on user type
        switch ($user['user_type']) {
            case 'admin':
                header('Location: admindashboard.php');
                exit;
            case 'patient':
                header('Location: patientdashboard1.php');
                exit;
            case 'doctor':
                header('Location: doctordashboard1.php');
                exit;
            case 'pharmacy':
                header('Location: pharmacydashboard1.php');
                exit;
            case 'pharmaceutical_company':
                header('Location: pharmaceuticaldashboard1.php');
                exit;
        }
    } else {
        echo 'Invalid username or password.';
    }
}

mysqli_close($conn);
?>