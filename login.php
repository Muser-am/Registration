 <!-- display validation errors here -->
 <?php include('server.php');?>
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
        <h2>Login</h2>
    </div>
    <form method="POST" action="login.php">
         <!-- display validation errors here -->
         <?php 
        include('errors.php');
        ?>
        <div class="input-group">
            <lable>Username</lable>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <lable>Password</lable>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member? <a href="/User_reg/register.php">Sign up</a>
        </p>
    </form>
</body>
</html>