<?php
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <title>User registration system using php and mysql</title>
    <link rel="stylesheet" href="/User_reg/style3.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="POST" action="register.php">
        <!-- display validation errors here -->
        <?php 
        include('errors.php');
        ?>
        <div class="input-group">
            <lable>Username</lable>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <lable>Email</lable>
            <input type="text" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <lable>Password</lable>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <lable>confirm password</lable>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member? <a href="/User_reg/login.php">Sign in</a>
        </p>
    </form>
</body>
</html>