<?php
// Database connection
include("connection.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $question_text = $_POST["question_text"];

    // Insert employee information
    $sql = "INSERT INTO users(name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        $user_id = $stmt->insert_id; // Get the auto-generated employee ID

        // Insert the question
        $sql = "INSERT INTO questions (user_id, question_text) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $user_id, $question_text);

        if ($stmt->execute()) {
            echo '<script>alert("Question submitted successfully.");</script>';

            echo '<meta http-equiv="refresh" content="2;url=farmers problems.php">';
            exit();
          
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
