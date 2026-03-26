
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
    <header>Add Service</header>
    <form action="Add service.php" method="post" class="form" onsubmit="return validateForm();">

        <div class="input-box">
            <label>Service Name:</label>
            <input type="text" name="servicename" id="servicename">
        </div>

        <div class="input-box">
            <label>Description:</label>
            <input type="text" name="descrip" id="descrip">
        </div>

        <div class="input-box">
            <label>Place:</label>
            <input type="text" name="place" id="place">
        </div>

        <div class="input-box">
            <label>Date:</label>
            <input type="date" name="date" id="date">
        </div>

        <div class="input-box">
            <label>Time:</label>
            <input type="time" name="time" id="time">
        </div>

        <div class="input-box">
            <label>Phone:</label>
            <input type="text" name="phone" id="phone">
        </div>

        <button type="submit" name="submit" value="Submit">Submit</button>

    </form>
</section>

<script>
    function validateForm() {
        var servicename = document.getElementById("servicename").value;
        var descrip = document.getElementById("descrip").value;
        var place = document.getElementById("place").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;
        var phone = document.getElementById("phone").value;

        // Basic validation checks (you can customize these)
        if (servicename === "") {
            alert("Please enter a Service Name.");
            return false;
        }

        if (descrip === "") {
            alert("Please enter a Description.");
            return false;
        }

        if (place === "") {
            alert("Please enter a Place.");
            return false;
        }

        if (date === "") {
            alert("Please enter a Date.");
            return false;
        }

        if (time === "") {
            alert("Please enter a Time.");
            return false;
        }

        if (phone === "") {
            alert("Please enter a Phone number.");
            return false;
        }

        // You can add more specific validation checks here for each field (e.g., phone number format, date format).

        return true; // If all validations pass, the form will submit.
    }
</script>



</body>
</html>
