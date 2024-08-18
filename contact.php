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
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    </head>
    <body>
        <section class="dhurendra">
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
            <form onsubmit="sendEmail(); reset(); return false;">
            <h3>CONTACT US</h3>
            <input type="text" id="Name" placeholder="Your Name" required>
            <input type="email" id="Emali Address" placeholder="Email Address" required>
            <input type="number" id="Phone Number" placeholder="Phone Number" required>
            <textarea id="Message"rows="4" placeholder="How Can Help You"></textarea>
            <button type="submit">SEND</button>
            </form>
        </div>
        </section>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){

                let name = document.getElementById("Name").value;
                let email  = document.getElementById("Email Address").value;
                let phone  = document.getElementById("Phone Number").value;
                let message  = document.getElementById("Message").value;


                Email.send({
                Host : "smtp.elasticemail.com",
                Username : "dhurendrakumarsharma4@gmail.com",
                Password : "7F3185DD9CF6C6EAA14EE393BED13A0605DF",
                To : 'dhurendrasharma6@gmail.com',
                From : "dhurendrakumarsharma4@gmail.com",
                Subject : "New Contact From Enquiry",
                Body : "And this body"

            }).then(
            message => alert("Message Sent Succesfully")
            );
            }
        </script>
    </body>
</html>