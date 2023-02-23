<?php
session_start();

$username = "";
$email = "";
$errors = array();

// connection to database
$servername= "localhost";
$usernam= "root";
$password= "";
$db= "registration";

$conn = mysqli_connect($servername, $usernam, $password, $db);

// if the register button is clicked
if (isset($_POST['register'])) {
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password_1 = trim($_POST['password_1']);
$password_2 = trim($_POST['password_2']);

// ensure that form is well filled
if (empty($username)) {
    array_push($errors, "Username is required");
}
if (empty($email)) {
    array_push($errors, "Email is required");
}
if (empty($password_1)) {
    array_push($errors, "Password is required");
}
if ($password_1 != $password_2) {
    array_push($errors, "The two passwords does not match");
}
// if there are no errors, save user to database
if (count($errors) == 0) {
    // encrypt password before storing in database
    $password = md5($password_1); 
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $sql);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
// redirect to home page
    header('location: /User_reg/homepage.php'); 
    }
}
// loh user in from login page
if (isset($_POST['login'])) {
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// ensure that form is well filled
if (empty($username)) {
    array_push($errors, "Username is required");
}
if (empty($password)) {
    array_push($errors, "Password is required");
}
// encrypt password before comparing with that from db
if(count($errors) == 0 ) {
    $password = md5($password);
    $query ="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
// log user in
    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: /User_reg/homepage.php');
    }
    else{
        array_push($errors, "wrong username/password combination");
        header('location: /User_reg/login.php');
    }
}
}
// logout
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: /User_reg/login.php');
}
?>