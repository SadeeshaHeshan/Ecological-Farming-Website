<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>packages list</title>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 30px;
  background: rgb(20, 15, 49);
}
    
    h1{
  color: #ff7200;
  height: 100vh;
  padding-top: -20px;
  margin-top: 5px;
  margin-left: -120px;
}


.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
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
 .input-box {
  width: 100%;
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
<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $packageId = $_GET['id'];

    // Fetch the package details using the ID
    $query = "SELECT * FROM service WHERE id = $packageId";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_array($result)) {
        // The package details are available, you can use them for updating
        $servicename = $row['servicename'];
        $escrip = $row['descrip'];
        $place = $row['place'];
        $date = $row['date'];
        $time = $row['time'];
        $phone = $row['phone'];

        // Display the form for updating the package
        ?>
        <div class="container">
            <header>Edit Service</header>
            <div class="form">
                <form method="POST" action="update_process.php">
                    <input type="hidden" name="id" value="<?php echo $packageId; ?>">
                    <div class="input-box">
                        Service Name: <input type="text" name="servicename" value="<?php echo $servicename; ?>"><br>
                        Description: <textarea name="descrip"><?php echo $escrip; ?></textarea><br>
                        Place: <input type="text" name="place" value="<?php echo $place; ?>"><br>
                        Date: <input type="date" name="date" value="<?php echo $date; ?>"><br>
                        Time: <input type="time" name="time" value="<?php echo $time; ?>"><br>
                        Phone: <input type="text" name="phone" value="<?php echo $phone; ?>"><br>
                    </div>
                    <div class="input-box">
  <a href="javascript:history.back()" class="back-button">Back</a>
</div>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
        <?php
    } else {
        echo 'Package not found.';
    }
} else {
    echo 'Package ID not provided.';
}

mysqli_close($conn);
?>
</body>
</html>
