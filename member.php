<?php
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
        <title>Member Form</title>
        <style>
            body{
                background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("/Back-End_Project/Images/web.jpeg");
            }
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
    width: 100%;
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
        <table border="4" cellspacing="8" bgcolor="white">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Member Type</th>
                <th>Email Address</th>
                <th>Phone Number</th>
            </tr>

<?php 
include("connection.php");
error_reporting(0);
$query = " SELECT * FROM library_form ";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo $total;
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['First_Name']."</td>
        <td>".$result['Last_Name']."</td>
        <td>".$result['Member_Type']."</td>
        <td>".$result['Email_Address']."</td>
        <td>".$result['Phone_Number']."</td>
        </tr>
        ";
    }
}
else
{
    echo "<script>alert('No Records Found')</script>";
}
?>
        </table>
    </body>
</html>