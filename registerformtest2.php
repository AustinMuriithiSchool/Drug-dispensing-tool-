<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form method="POST" action="registertest2.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <label for="user-type">Select User Type:</label>
        <select id="user-type" name="user-type">
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
            <option value="pharmacy">Pharmacy</option>
            <option value="pharmaceutical_company">Pharmaceutical Company</option>
        </select>
        <br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
