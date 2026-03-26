<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
    <link rel="stylesheet" href="register.css">

    <script>
    function validateForm() {
        var fname = document.getElementById("fname").value;
        var lname = document.getElementById("lname").value;
        var address = document.getElementById("address").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var conpassword = document.getElementById("conpassword").value;

        // Basic validation checks (you can customize these)
        if (fname === "") {
            alert("Please enter First Name.");
            return false;
        }

        if (lname === "") {
            alert("Please enter Last Name.");
            return false;
        }

        if (address === "") {
            alert("Please enter Address.");
            return false;
        }

        if (email === "") {
            alert("Please enter Email.");
            return false;
        }

        if (password === "") {
            alert("Please enter Password.");
            return false;
        }

        if (conpassword === "") {
            alert("Please confirm Password.");
            return false;
        }

        if (password !== conpassword) {
            alert("Passwords do not match.");
            return false;
        }

        // You can add more specific validation checks here, such as email format, password complexity, etc.

        return true; // If all validations pass, the form will submit.
    }
</script>
</head>
<body>
    <?php
    include("navbar.php")
    ?>

    <div class="main">

    <div class="form2">
    <form id="form1" name="registration" method="post" action="Reginsert.php" onsubmit="return validateForm()">
        <h2>SIGN UP HERE</h2>
        <input type="text" name="fname" placeholder="Enter First Name Here" id="fname">
        <input type="text" name="lname" placeholder="Enter Last Name Here" id="lname">
        <input type="text" name="address" placeholder="Enter Address Here" id="address">
        <input type="email" name="email" placeholder="Enter Email Here" id="email">
        <input type="password" name="password" placeholder="Enter Password Here" id="password">
        <input type="password" name="conpassword" placeholder="Enter Confirm Password Here" id="conpassword">
        <input type="hidden" name="role" required value="Farmers">
        <button class="btnn" type="submit" name="submit" value="Submit">Register</button>
    </form>
</div>

               
        
          
        
            </div>
        
            </div>
        
        







</body>
</html>
