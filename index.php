<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System</title>
</head>
<body>

    <h1>Welcome to the Authentication System</h1>

    <?php if (isset($_SESSION['user_id'])): ?>
        <p>Welcome back, <?php echo htmlspecialchars($_SESSION['email']); ?>!</p>
        <a href="dashboard.php">Go to Dashboard</a> | 
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p><a href="login.php">Login</a> | <a href="register.php">Register</a></p>
    <?php endif; ?>

</body>
</html>
