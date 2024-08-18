<?php include_once ("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Your Password In Php</title>
    <link rel="stylesheet" type="text/css" href="forgot.css">
</head>

<body>
    <div id="container">
        <h2>Email Check</h2><br>
        <div id="line"></div>
        <form action="otp.php" method="POST" autocomplete="off">
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }
            ?>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="submit" name="forgot_password" value="Check">
        </form>
    </div>
</body>

</html>