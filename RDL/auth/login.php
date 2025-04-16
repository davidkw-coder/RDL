<!DOCTYPE html>
<html>
<head>
    <title>Login - Rwanda Driving License System</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="container">
        <div class="blue-circle"></div>
        <div class="orange-circle"></div>
        
        <div class="login-form">
            <h1>Login Here</h1>
            
            <div class="error-message" style="display: none;">Invalid username or password</div>
            
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Email or Phone" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                
                <button type="submit" class="login-btn">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>