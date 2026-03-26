
<?php
include("Farmers.php")
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
    </style>
</head>
<body>
    <h1>Problems</h1>

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
          
            echo '</li>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </ul>

</body>
</html>
