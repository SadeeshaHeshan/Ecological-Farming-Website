<?php
// Database connection
include("connection.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question_id = $_POST["question_id"];
    $reply_text = $_POST["reply_text"];

    // Insert the reply
    $sql = "INSERT INTO replies (question_id, reply_text) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $question_id, $reply_text);

    if ($stmt->execute()) {
        echo '<script>alert("Reply submitted successfully.");</script>';
            

        echo '<meta http-equiv="refresh" content="2;url=Admin Question.php">';
        exit(); 
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
