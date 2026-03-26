<?php
include("Farmers.php")
?>


<!DOCTYPE html>
<html>
<head>
    <title>Problems</title>
    <link rel="stylesheet" href="forms.css">
    <script>
        function validateForm() {
            var name = document.forms["problemForm"]["name"].value;
            var email = document.forms["problemForm"]["email"].value;
            var questionText = document.forms["problemForm"]["question_text"].value;
            
            // Basic validation
            if (name === "" || email === "" || questionText === "") {
                alert("All fields must be filled out");
                return false;
            }
            
            // Additional validation rules can be added here
            
            return true;
        }
    </script>
</head>
<body>
    <section class="container">
        <header>Problems</header>
        <form action="question.php" method="post" class="form" name="problemForm" onsubmit="return validateForm()">
            <div class="input-box">
                <label>Your Name</label>
                <input type="text" name="name" value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly>
            </div>
            <div class="input-box">
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div class="input-box">
                <label>Question:</label>
                <textarea name="question_text" rows="4" cols="50" placeholder="Enter Problems Here. . . . . . . . ."></textarea><br><br>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
