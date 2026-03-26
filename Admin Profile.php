<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
</head>
<body>
  
    <?php

    if(isset($_POST['submit'])){
        include("connection.php");
        
       $servicename=$_POST['servicename'];
       $descrip=$_POST['descrip'];
       $place=$_POST['place'];
       $date=$_POST['date'];
       $time=$_POST['time'];
       $phone=$_POST['phone'];
       
       $sql="INSERT INTO service". "(servicename, descrip, place, date, time, phone)" . "VALUES('$servicename','$descrip','$place', '$date','$time','$phone')";
        
       $results= mysqli_query($conn, $sql);
        
     if(!$results){
           die('Could not enter dara:'.mysql_error($conn));
            header("location:Admin add Service.php");
       }
       else
       {
        echo '<script>alert("Data submitted successfully.");</script>';
            

        echo '<meta http-equiv="refresh" content="2;url=Admin add Service.php">';
        exit();
       }
       
    } else{
        echo "Your form is not submitted yet please fill the form and visit again";
        
    }
    
    
    ?>
    




</body>
</html>
