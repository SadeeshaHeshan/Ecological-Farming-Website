<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the package ID from the form submission
    $packageId = $_POST['id'];

    // Retrieve updated information from the form submission
    $servicename = $_POST['servicename'];
    $escrip = $_POST['descrip'];
    $place = $_POST['place'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $phone = $_POST['phone'];

    // Update the package information in the database
    $update_query = "UPDATE service SET 
        servicename = '$servicename',
        descrip = '$escrip',
        place = '$place',
        date = '$date',
        time = '$time',
        phone = '$phone'
        WHERE id = $packageId";

    if (mysqli_query($conn, $update_query)) {
        // Update successful

        echo '<script>alert("Update successfully.");</script>';
            

        echo '<meta http-equiv="refresh" content="2;url=Admin services.php">';
        exit(); 


        header("Location: Admin services.php"); // Redirect back to the list of packages
        exit();
    } else {
        // Error in updating
        echo "Error updating package: " . mysqli_error($conn);
    }
} else {
    // If the form was not submitted via POST, redirect back to the list of packages
    header("Location: Admin services.php"); // Change to the actual page URL
    exit();
}

mysqli_close($conn);
?>
