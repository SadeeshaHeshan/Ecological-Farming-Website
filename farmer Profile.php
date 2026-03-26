<?php
// Include your database connection code (connection.php)
include 'connection.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $packageId = $_GET['id'];

    // Perform the delete operation
    $deleteQuery = "DELETE FROM service WHERE id = $packageId";

    if (mysqli_query($conn, $deleteQuery)) {
        // Deletion successful
        header('Location: Admin services.php'); // Redirect back to the original page
        exit();
    } else {
        // Handle the case where deletion fails (e.g., display an error message)
        echo "Error deleting package: " . mysqli_error($conn);
    }
} else {
    // Handle the case where 'id' parameter is not set in the URL
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>
