<?php include_once ("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>OTP Verification Form</title>
    <link rel="stylesheet" type="text/css" href="otp.css">
</head>
<body>
    <div id="container">
        <h2>Sign Up</h2>
        <div id="line"></div>
        <form action="newPassword.php" method="POST" autocomplete="off">
            <?php
            if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>

            <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?>      
            <input type="number" name="otp" placeholder="Verification Code" required><br>
            <input type="submit" name="verify" value="Verify">
        </form>
    </div>
</body>
</html>