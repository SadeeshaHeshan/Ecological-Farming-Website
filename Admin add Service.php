
<?php
include("Admin.php")
?>

<!DOCTYPE html>
<html>
<head>
    <title> Questions</title>
    <style type="text/css">
      
      /* Reset some default styles for better consistency */
     



      /* Style for the list container */
      ul {
          list-style-type: none;
          padding: 0;
          margin-left: 200px;
          width: 600px; /* Adjust as needed */
  height: auto;

      }

      /* Style for each list item */
      li {
          background-color: #fff;
          margin-bottom: 20px;
           border: 1px solid #ccc;
          border-radius: 5px;
          padding: 20px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          margin-left: 10px;
      }

      /* Style for the user's name */
      .user-name {
          font-weight: bold;
          color: #007BFF;
      }

      /* Style for the question text */
      .question-text {
          margin-top: 10px;
          color: #333;
      }

      /* Style for the reply text */
      .reply-text {
          margin-top: 10px;
          color: #FF5733;
      }

      /* Style for "No reply yet" */
      .no-reply {
          font-style: italic;
          color: #888;
      }
      






      .container {
  position: absolute;
  max-width: 300px;
  width: 50%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 0px;
  top: 50px;
  left:850px;
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
.form .input-box {
  width: 90%;
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
    <h1>Questions</h1>

    <!-- List of Questions and Replies -->
    <ul>
        <?php
        // Database connection
        include("connection.php");

        if (!$conn) {
            die('Could not connect: ' . mysqli_error($conn));
        }

        // Fetch questions and their replies from the database
        $sql = "SELECT q.id AS question_id, u.name AS user_name, q.question_text, r.reply_text FROM questions q LEFT JOIN replies r ON q.id = r.question_id INNER JOIN users u ON q.user_id=u.id;";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Error: ' . mysqli_error($conn));
        }

        // Display questions and replies
        while ($row = mysqli_fetch_assoc($result)) {
            $questionId = $row['question_id'];
            $farmername = $row['user_name'];
            $questionText = $row['question_text'];
            $replyText = $row['reply_text'];

            echo '<li>';
            echo '<strong>Name:</strong> ' . $farmername . '<br>';
            echo '<strong>Question:</strong> ' . $questionText . '<br>';
            if ($replyText !== null) {
                echo '<strong>Reply:</strong> ' . $replyText . '<br>';
            } else {
                echo '<em>No reply yet.</em><br>';
            }
            echo '<a href="#" class="question-link" data-question-id="' . $questionId . '">Reply</a>';
            echo '</li>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </ul>



    <section class="container">
    <header>Reply</header>
    <form action="admin_reply.php" method="post" class="form" onsubmit="return validateForm();">

        <div class="input-box">
            <label>Question ID</label>
            <input type="number" name="question_id" id="question_id">
        </div>

        <div class="input-box">
            <label>Reply</label>
            <textarea name="reply_text" id="reply_text"></textarea>
        </div>

        <button type="submit" value="Submit Reply">Submit</button>

    </form>
</section>









    <script>
        // Get all question links
        const questionLinks = document.querySelectorAll('.question-link');

        // Add click event listeners to each question link
        questionLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const questionId = this.getAttribute('data-question-id');
                document.getElementById('question_id').value = questionId;
               
            });
        });

    function validateForm() {
        var questionId = document.getElementById("question_id").value;
        var replyText = document.getElementById("reply_text").value;

        // Simple validation example
        if (questionId === "") {
            alert("Please enter a Question ID.");
            return false;
        }

        if (replyText === "") {
            alert("Please enter a reply.");
            return false;
        }

        // You can add more validation checks here, such as checking the format of the question ID.

        return true; // If all validations pass, the form will submit.
    }




    </script>
</body>
</body>
</html>
