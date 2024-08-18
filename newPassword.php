<?php include_once ("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="forgot.css">
</head>
<body>
<div id="container">
        <h2>Password</h2><br>
        <div id="line"></div>
        <form action="login.php" method="POST" autocomplete="off">
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }
            ?>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" name="changePassword" value="Save">
        </form>
    </div>
</body>
</html>