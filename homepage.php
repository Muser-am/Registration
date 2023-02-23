<?php
 include('server.php');
//  if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
    header('location: /User_reg/login.php');
}
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
        <h2>Home page</h2>
    </div>
    
    <div class="content">
        <?php if (isset($_SESSION['success'])):?>
            <div class="error success">
            <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
            </h3>  
            </div>
        <?php endif ?>
        
        <?php if (isset($_SESSION["username"])): ?>
            <p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="/User_reg/homepage.php?logout=1" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>
</body>
</html>