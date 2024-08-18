<?php
include("connection.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <form action="#" method="POST" autocomplete="off">
            <div class="title">
            Registration Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" class="input" name="fname" required>
                </div>
                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" class="input" name="lname" required>
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="password" required>
                </div>
                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" class="input" name="conpassword" required>
                </div>
                <div class="input_field">
                    <label>Member Type</label>
                    <div class="selectbox">
                    <select name="membertype" required>
                        <option value="">SELECT</option>
                        <option value="STUDENT">STUDENT</option>
                        <option value="ADMIN STAF">ADMIN STAF</option>
                        <option value="LECTURER">LECTURER</option>
                    </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Email Address</label>
                    <input type="text" class="input" name="email" required>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="text" class="input" name="phone" required>
                </div>
                <div class="input_field terms">
                    <input type="submit" value="REGISTER" class="btn" name="submit">
                </div>
                <div class="signup">Already Have An Accout ?<a href="login.php" class="link"> Login Here</a></div>
            </div>
            </form>
        </div>
    </body>
</html>

<?php
if($_POST['submit'])
{
    $first_name = $_POST['fname'];
    $last_name  = $_POST['lname'];
    $pwd        = $_POST['password'];
    $cpwd       = $_POST['conpassword'];
    $membertype = $_POST['membertype'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];


    $query = "INSERT INTO LIBRARY_FORM VALUES('$first_name','$last_name','$pwd','$cpwd','$membertype','$email','$phone')";
    $Dhurendra = mysqli_query($conn,$query);

    if($Dhurendra)
    {
        echo "<script>alert('The Account Has Been Successfully Created')</script>";
    }
    else
    {
        echo "Failed";
    }
}
?>