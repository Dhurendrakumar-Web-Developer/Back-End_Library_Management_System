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
			<title>Library Books Website Design</title>
			<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
		<section class="header">
			<nav>
				<a href="home_page.php"><img src="/Back-End_Project/Images/logo1.png" alt=""></a>
				<div class="nav-links" id="navLinks">
					<i class="fa fa-times" onclick="hidenMenu()"></i>
					<ul>
						<li><a href="book_list.php">BOOK LIST</a></li>
						<li><a href="add_new_book.php">ADD NEW BOOK</a></li>
						<li><a href="book_registration.php">BOOK REGISTRATION</a></li>
						<li><a href="book_submit.php">BOOK RETURN</a></li>
						<li><a href="member.php">WEBSITE USER</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</div>
				<i class="fa fa-bars" onclick="showMenu()"></i>
			</nav>
			<div class="text-box">
			<marquee><h1>World's Biggest Library Books</h1></marquee>
				<p>Making Website is now one of the easiest thing in the world. You just need to learn HTML, CSS, JAVASCRIPT <br>PHP, MYSQL and are good to go.</p>
				<a href="" class="hero-btn">Visit Us To Know More</a>

			</div>

		</section>
<!------- Book Details ------>

<section class="campus">
<h1>Book Details</h1>
<p>Read A Thousand Books And Your Words Will Flow Like A River</p>
<div class="row">
	<div class="campus-col">
		<img src="/Back-End_Project/Images/python.jpg"><br>
		<div class="layer">
			<h3>The  Python Book</h3>
		</div>
	</div>
	<div class="campus-col">
		<img src="/Back-End_Project/Images/html.jpeg"><br>
		<div class="layer">
		<h3>The Complete Reference HTML & CSS</h3>
		</div>
		</div>
		<div class="campus-col">
			<img src="/Back-End_Project/Images/css.jpg"><br>
			<div class="layer">
				<h3>Begining CSS Web Development</h3>
			</div>
			</div>
			<div class="campus-col">
			<img src="/Back-End_Project/Images/javascript.png"><br>
			<div class="layer">
				<h3>Learn Javascript Quickly</h3>
			</div>
			</div>
			
</div>
</section>
<!---------------- dublicat -------->
<section class="campus">
<div class="row">
	<div class="campus-col">
		<img src="/Back-End_Project/Images/php.jpg"><br>
		<div class="layer">
			<h3>Learn PHP 7</h3>
		</div>
	</div>
	<div class="campus-col">
		<img src="/Back-End_Project/Images/java.jpg"><br>
		<div class="layer">
			<h3>A TextBook Of JAVA Programming</h3>
		</div>
		</div>
		<div class="campus-col">
			<img src="/Back-End_Project/Images/NodeJS.png"><br>
			<div class="layer">
				<h3>Node.js Notes Of Professionals</h3>
			</div>
			</div>
			<div class="campus-col">
			<img src="/Back-End_Project/Images/mysql.jpg"><br>
			<div class="layer">
				<h3>MYSQL Notes Of Professionals</h3>
			</div>
			</div>
			
</div><br>
<a href="book_list.php" class="Dhurendra-btn">MORE BOOKS</a>
</section>
<!------- testimonials -------->
<section class="testimonials">
	<h1>What Our Student Says</h1>
	<p></p>
	<div class="row">
		<div class="testimonial-col">
			<img src="/Back-End_Project/Images/Dhurendra.jpeg">
			<div>
				<p>The World's Biggest Library Books is very easy to operate and<br> it is very helpful  I love World's Biggest Library Books <br> It is an excellent website</p>
				<h3>Dhurendrakumar Sharma</h3>
			</div>
		</div>
		<div class="testimonial-col">
			<img src="/Back-End_Project/Images/samir.jpeg">
			<div>
				<p>The World's Biggest Library Books is very easy to operate and <br> it is very helpful I love World's Biggest Library Books <br> It is an excellent website</p>
				<h3>Samir Yadav</h3>
			</div>
		</div>
	</div>

</section>

<!------Call To Action ------->
<section class="cta">
	<h1>Enroll For Our Various Books<br> Anywhere From The World</h1>
	<a href="contact.php" class="hero-btn">CONTACT US</a>
</section>

<!-------- Footer ------->




<!------JavaSceipt for  Toggle Menu------->
<script>
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}
</script>

	</body>
</html>
