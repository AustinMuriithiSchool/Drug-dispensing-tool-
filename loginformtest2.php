<?php
session_start();

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform the necessary validation and authentication

    // If login is successful, set the username in the session
    $_SESSION['username'] = $username;

    // Redirect to the main page
    header('Location: loginformtest2.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login and Registration</title>
</head>
<body>
    <h2>Drug Dispensing Company User Login and Registration</h2>
    <h3>Login</h3>
    <form method="POST" action="logintest2.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <input type="submit" value="Login">
    </form>
    
    <h3>Register</h3>
    <form method="POST" action="registertest2.php">
        <label for="username_reg">Username:</label>
        <input type="text" id="username_reg" name="username_reg" required>
        <br><br>
        <label for="password_reg">Password:</label>
        <input type="password" id="password_reg" name="password_reg" required>
        <br><br>
        <label for="email_reg">Email:</label>
        <input type="text" id="email_reg" name="email_reg" required>
        <br><br>
        <label for="phone_reg">Phone:</label>
        <input type="text" id="phone_reg" name="phone_reg" required>
        <br><br>
        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type">
            <option value="patient">Patient</option>
            <option value="admin">Admin</option>
            <option value="doctor">Doctor</option>
            <option value="pharmacy">Pharmacy</option>
            <option value="pharmaceutical_company">Pharmaceutical Company</option>
        </select>
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>