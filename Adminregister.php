<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'Admin') {
    // Redirect to the login page if the user is not logged in or not an admin
    header("location: Login.php");
    exit(); // Terminate script execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmers Page</title>
<style>
	*{
			padding: 0px;
			margin:0px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
	body {
    font-family: "Lato", sans-serif;
    background-color: darkslategray;
}

h1 {
    text-align: center;
	color: #FFFFFF;
}


  
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    opacity: 0.8;
    background-color: #111;
    padding-top: 20px;
    font-size: 20px;
	top: 10%;
}
  
.sidenav a {
    padding: 25px 6px 6px 32px;
    text-decoration:dotted;
    font-size: 20px;
    color: #818181;
    display: block;
	text-align: justify;
	margin: 8px;
}
  
.sidenav a:hover {
    color: #f1f1f1;
}


</style>
</head>
<body>
<h1>Welcome, Admin <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?> </h1>
 
<div class="sidenav">
         
        <a href="Admin Profile.php"> Profile</a>
         <a href="Admin Question.php">Problems</a>
         <a href="Admin add Service.php">Add Service</a>
         <a href="Admin services.php">Program</a>
         <a href="Admin register list.php">Registration List</a>
         <a href="Add new offices.php">Add Officers</a>
         <a href="Add new Admin.php">Add Admins</a>
         <a href="logout.php">Logout</a>
      
      
      
     </div>
    




</body>
</html>
