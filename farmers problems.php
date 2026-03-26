<?php
include("Farmers.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer's Page</title>

    <link rel="stylesheet" href="profile.css">
</head>
<body>


<div class="form">
    
        <h2>Profile</h2>
        
   
        <p class="link">First Name: <?php echo $_SESSION['fname'];?><br><br>
        Last Name:  <?php echo $_SESSION['lname']; ?> <br><br>
        E-mail:     <?php echo $_SESSION['email'];?>

   

    </div>



</body>
</html>
