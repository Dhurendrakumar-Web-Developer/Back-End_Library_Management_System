<?php
include("connection.php");
error_reporting(0);
$fn=$_GET['fn'];
$ln=$_GET['ln'];
$bn=$_GET['bn'];
$id=$_GET['id'];
$rd=$_GET['rd'];
$rf=$_GET['rf'];
$email=$_GET['email'];
$pn=$_GET['pn'];

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
<html>
    <head>
        <title>
            UPDATE FORM
        </title>
        <style>
            nav{
	display: flex;
	padding: 1% 6%;
	justify-content: space-between;
	align-items: center;
}
nav img{
	width: 50px;
	border-radius: 30%;
	margin-right: auto;
}
.nav-links{
	flex: 1;
	text-align: right;
}
.nav-links ul li{
	list-style: none;
	display: inline-block;
	padding: 8px 12px;
	position: relative;
}
.nav-links ul li a{
	color: #fff;
	text-decoration: none;
	font-size: 13px;
}
.nav-links ul li::after{
	content: '';
	width: 0%;
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
	transition: 0.5s;
}
.nav-links ul li:hover::after{
	width: 100%;
}
            table{
                color: white;
                border-radius: 20px;
            }
            #button
            {
                background-color: green;
                color: white;
                height: 32px;
                width: 125px;
                border-radius: 25px;
                font-size: 16px;
            }
            body
            {
                background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("/Back-End_Project/Images/update.jpg");
            }
        </style>
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
        <form action="" method="GET">
            <table border="0" bgcolor="black" align="center" cellspacing="20">
                <tr>
                    <td>First Name</td>
                    <td><input type="text" value="<?php echo "$fn" ?>" name="First_Name" required></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" value="<?php echo "$ln" ?>" name="Last_Name" required></td>
                </tr>
                <tr>
                    <td>Book Name</td>
                    <td><input type="text" value="<?php echo "$bn" ?>" name="Book_Name" required></td>
                </tr>
                <tr>
                    <td>Issus Date</td>
                    <td><input type="text" value="<?php echo "$id" ?>" name="Issus_Date" required></td>
                </tr>
                <tr>
                    <td>Return Date</td>
                    <td><input type="text" value="<?php echo "$rd" ?>" name="Return_Date" required></td>
                </tr>
                <tr>
                    <td>Late Fine</td>
                    <td><input type="text" value="<?php echo "$rf" ?>" name="Return_Fine" required></td>
                </tr>
                <tr>
                    <td>Email Address</td>
                    <td><input type="text" value="<?php echo "$email" ?>" name="Email_Address" required></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="text" value="<?php echo "$pn" ?>" name="Phone_Number" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update Details"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
if($_GET['submit'])
{
    $firstname = $_GET['First_Name'];
    $lastname = $_GET['Last_Name'];
    $bookname = $_GET['Book_Name'];
    $issus = $_GET['Issus_Date'];
    $return = $_GET['Return_Date'];
    $returnfine = $_GET['Return_Fine'];
    $email = $_GET['Email_Address'];
    $phonenumber = $_GET['Phone_Number'];

    $query = "UPDATE book_register SET First_Name='$firstname', Last_Name='$lastname', Book_Name='$bookname', Issus_Date='$issus', Return_Date='$return', Return_Fine='$returnfine', Email_Address='$email', Phone_Number='$phonenumber' WHERE Email_Address='$email' ";
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "<script>alert('Record Updated Successfully')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Dhurendra%20Project/book_submit.php">
        <?php
    }
    else
    {
        echo "Failed to Update Recored";
    }
}
?>