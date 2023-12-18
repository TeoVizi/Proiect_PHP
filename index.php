<!DOCTYPE html>
<html>
<head>
    <title>Proiect</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<style>
 
</style>

<body>
    <h1>Authentification</h1>
    <div class="login-container">
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <?php if (!empty($error)): ?>
                <div class="error-message">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php endif; ?>

            <div class="button-container" >
                <input type="submit" value="Login" class="login-btn">
                <button type="button" class="signup-btn" onclick="location.href='create_user.php'">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>
