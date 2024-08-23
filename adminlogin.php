<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1 class="h1">Admin Login</h1>
    <?php
        // Include the configuration file (replace with your actual path)
        include 'config.php';

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Prepare the SQL query
            $sql = "SELECT * FROM registeredadmin WHERE usename = ? AND password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $username, $password); // Bind both username and password

            // Execute the query
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                // Login successful, redirect to dashboard
                header('Location: admindashboard.php');
                exit;
            } else {
                $error_message = 'Incorrect username or password.';
            }

            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
    ?>

    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <p>
        Not registered? <a href="register.php">Register here</a>
    </p>
</body>
</html>