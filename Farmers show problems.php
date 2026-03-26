
<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'Farmers') {
    // Redirect to the login page if the user is not logged in or not an admin
    header("location: Login.php");
    exit(); // Terminate script execution
}
$selectedServiceName = urldecode($_GET['servicename']);
?>


<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 30px;
  background: rgb(20, 15, 49);
}
    
    h1{
  color: #ff7200;
  height: 100vh;
  padding-top: -20px;
  margin-top: 5px;
  margin-left: -120px;
}


.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 600;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
 .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}

.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}

.input-box textarea{

  position: relative;
  height: 230px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;

}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}

 



    
    
    
    
    
    
    
    </style>



</head>
<body>
    




<section class="container">
    <header>Service Registration</header>
    <form name="createservice" class="form" method="post" action="Service Register.php" onsubmit="return validateForm();">

        <div class="input-box">
            <label>Your Name</label>
            <input type="text" name="name" value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly>
        </div>

        <div class="input-box">
            <label>Program Name:</label>
            <input type="text" name="proname" placeholder="Programe name" value="<?php echo htmlspecialchars($selectedServiceName); ?>" readonly>
        </div>

        <div class="input-box">
            <label>Your Address:</label>
            <input type="text" name="address" placeholder="Enter Your Address" id="address">
        </div>

        <div class="input-box">
            <label>E-mail</label>
            <input type="text" name="mail" placeholder="Your E-mail" id="email">
        </div>

        <div class="input-box">
            <label>Phone:</label>
            <input type="tel" name="phone" placeholder="Enter Your Phone" id="phone">
        </div>

        <div class="input-box">
            <a href="javascript:history.back()" class="back-button">Back</a>
        </div>

        <button type="submit" name="submit" value="Submit">Submit</button>

    </form>
</section>




<script>
    function validateForm() {
        var address = document.getElementById("address").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;

        // Simple validation example
        if (address === "") {
            alert("Please enter your address.");
            return false;
        }

        if (email === "") {
            alert("Please enter your email.");
            return false;
        }

        // You can add more validation checks here for email format, phone format, etc.

        return true; // If all validations pass, the form will submit.
    }
</script>
      

</body>
</html>
