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
        <link rel="stylesheet" type="text/css" href="add_new_book.css">
        <title>Book Registration Form</title>
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
					<li><a href="book_submit.php">BOOK RETURN</a></li>
					<li><a href="member.php">WEBSITE USER</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
					</ul>
				</div>
				<i class="fa fa-bars" onclick="showMenu()"></i>
			</nav>
        <div class="container">
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="title">
            Book Registration Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label>Book Name</label>
                    <input type="text" class="input" name="book_name" required>
                </div>
                <div class="input_field">
                <label>Book Publication</label>
                    <div class="selectbox">
                <select name="book_publication" required>
                        <option value="">SELECT</option>
                        <option value="NIRALI">NIRALI</option>
                        <option value="VISION">VISION </option>
                        <option value="TECH KNOWLEDGE">TECH KNOWLEDGE</option>
                    </select>
                    </div>
                </div>
                <div class="input_field">
                    <label>Book Code</label>
                    <input type="number" class="input" name="book_code" required>
                </div>
                <div class="input_field">
                    <label>Book Author</label>
                    <input type="text" class="input" name="book_writer" required>
                </div>
                <div class="input_field terms">
                    <input type="submit" value="SUBMIT" class="btn" name="submit">
                </div>
            </div>
            </form>
        </div>
    </body>
</html>

<?php
if($_POST['submit'])
{

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "Images3/".$filename;
    move_uploaded_file($tempname, $folder);


   
    $bookname  = $_POST['book_name'];
    $bookpublication    = $_POST['book_publication'];
    $bookcode      = $_POST['book_code'];
    $bookwriter      = $_POST['book_writer'];


    $query = "INSERT INTO add_new_book VALUES('$bookname','$bookpublication','$bookcode','$bookwriter')";
    $Dhurendra = mysqli_query($conn,$query);

    if($Dhurendra)
    {
        echo "<script>alert('The Book Has Been Successfully Add New Book')</script>";
    }
    else
    {
        echo "<script>('Failed')</script>";
    }
}
?>