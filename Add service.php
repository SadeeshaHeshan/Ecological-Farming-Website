<?php
include("Admin.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
    <link rel="stylesheet" href="forms.css">

</head>
<body>

 


<section class="container">
    <header>Add Officers</header>
    <form action="Adminregister.php" method="post" class="form" onsubmit="return validateForm();">

        <div class="input-box">
            <label>First Name:</label>
            <input type="text" name="fname" id="fname">
        </div>

        <div class="input-box">
            <label>Last Name:</label>
            <input type="text" name="lname" id="lname">
        </div>

        <div class="input-box">
            <label>Address:</label>
            <input type="text" name="address" id="address">
        </div>

        <div class="input-box">
            <label>Email:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-box">
            <label>Password:</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="input-box">
            <label>Confirm Password:</label>
            <input type="password" name="conpassword" id="conpassword">
        </div>

        <input type="hidden" id="role" name="role" value="Field Officers">

        <button type="submit" name="submit" value="Submit">Submit</button>

    </form>
</section>

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



</body>
</html>