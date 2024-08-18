<?php
include("connection.php");
session_start();

$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{

}
else
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Registration Form</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
            <nav>
			<a href="home_page.php"><img src="/Back-End_Project/Images/logo1.png"></a>

				<div class="nav-links" id="navLinks">
					<i class="fa fa-times" onclick="hidenMenu()"></i>
					<ul>
                    <li><a href="home_page.php">HOME PAGE</a></li>
					<li><a href="book_list.php">BOOK LIST</a></li>
					<li><a href="add_new_book.php">ADD NEW BOOK</a></li>
					<li><a href="book_registration.php">BOOK REGISTRATION</a></li>
					<li><a href="book_submit.php">BOOK RETURN</a></li>
					<li><a href="member.php">WEBSITE USER</a></li>
					</ul>
				</div>
				<i class="fa fa-bars" onclick="showMenu()"></i>
			</nav>
        <div class="container">
            <form action="#" method="POST" autocomplete="off">
            <div class="title">
            Book Registration Form
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
                    <label>Book Name</label>
                    <input type="text" class="input" name="book_name" required>
                </div>
                <div class="input_field">
                    <label>Essue Date</label>
                    <input type="date" class="input" name="issus_date" required>
                </div>
                <div class="input_field">
                    <label>Return Date</label>
                    <input type="date" class="input" name="return_date" required>
                </div>
                <div class="input_field">
                    <label>Late Return Fine</label>
                    <div class="selectbox">
                    <select name="membertype">
                        <option value="0.0 Rs">0.0 Rs</option>
                    </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Email Address</label>
                    <input type="email" class="input" name="email" required>
                </div>
                <div class="input_field">
                    <label>Phone Number</label>
                    <input type="number" class="input" name="phone" required>
                </div>
                <div class="input_field terms">
                    <input type="submit" value="REGISTER" class="btn" name="submit">
                </div>
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
    $book_name  = $_POST['book_name'];
    $issus_date = $_POST['issus_date'];
    $return_date= $_POST['return_date'];
    $membertype = $_POST['membertype'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];


    $query = "INSERT INTO book_register VALUES('$first_name','$last_name','$book_name','$issus_date','$return_date','$membertype','$email','$phone')";
    $Dhurendra = mysqli_query($conn,$query);

    if($Dhurendra)
    {
        echo "<script>alert('The Book Has Been Successfully Register')</script>";
    }
    else
    {
        echo "Failed";
    }
}
?>