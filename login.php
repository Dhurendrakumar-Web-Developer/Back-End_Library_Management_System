<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login_style.css">
        <title>Login Page</title>
    </head>
    <body>
        <div class="center">
            <h1>Login</h1>
            <form action="#" method="POST" autocomplete="off">
            <div class="form">
                <input type="text" name="Username" class="textfiled" placeholder="Username" required>
                <input type="password" name="Password" class="textfiled" placeholder="Password" required>
                <div class="Forgetpassword"><a href="forgot.php" class="link">Forget Password</a>
                <input type="submit" name="Login" value="Login" class="btn">
                <div class="signup">Don't Have An Accout ? <a href="registration.php" class="link"> Register Now</a></div>
            </div>
            </form>
        </div> 
        
    </body>
</html>

<?php
include("connection.php");
if(isset($_POST['Login']))
{
    $username = $_POST['Username'];
    $pwd      = $_POST['Password'];

    $query = "SELECT * FROM library_form WHERE Email_Address = '$username' && Password = '$pwd'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    //echo $total;

    if($total == 1)
    {
        $_SESSION['user_name'] = $username;
        header('location:home_page.php');
    }
    else
    {
        echo "<script>alert('Login Failed')</script>";
    }
}
?>