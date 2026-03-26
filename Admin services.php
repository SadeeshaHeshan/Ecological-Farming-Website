<?php
include("Admin.php")
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>packages list</title>
    <style>
        

        .search {
            text-align: center;
            margin-top: 20px;
        }

        .srch {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .table_responsive {
            margin-top: 20px;
            overflow-x: auto;
            margin-left: 250px;
        }

        table {
            width: 95%;
            border-collapse: collapse;
            background-color: #fff;
            
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
   
</head>

<body>

    <?php
    include 'connection.php';

    if (isset($_GET['search'])) {
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $query = "SELECT * FROM program WHERE proname LIKE '%$search%'";
        $result = mysqli_query($conn, $query);
    } else {
        // If no search query is provided, retrieve all records
        $result = mysqli_query($conn, "SELECT * FROM program");
    }

    ?>

   


<div class="search">
    <form method="GET" action="" onsubmit="return validateForm()">
        <input class="srch" type="text" name="search" id="search" placeholder="Search by Program Name">
        <input type="submit" value="Search" class="btn">
    </form>
</div>

<script>
    function validateForm() {
        var searchInput = document.getElementById('search').value;
        if (searchInput.trim() === '') {
            alert('Please enter a search term.');
            return false; // Prevent the form from submitting
        }
        // You can add more validation here if needed
        return true; // Allow the form to submit
    }
</script>

<div class="table_responsive">

    <table border="1">
    <thead>
        <tr>
            <th>Farmer Name</th>
            <th>Program Name</th>
            <th>Address</th>
            <th>E-mail</th>
            <th>Phone</th>
           
        </tr>
        </thead>
        </div>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            $proname = $row['proname'];
            $address = $row['address'];
            $mail = $row['mail'];
            $phone = $row['phone'];
           
        ?>

            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $proname; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $mail; ?></td>
                <td><?php echo $phone; ?></td>
                
            </tr>

        <?php
        } //end of while
        mysqli_close($conn);
        ?>

    </table>

</body>

</html>
