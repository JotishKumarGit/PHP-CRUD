<?php
// PHP CRUD 
// Steps 
// 1 Create  Database and connect with front end 
// 2 insert Data 
// 3 Display Data 
// Edit/Update Data
// Delete

include('Database.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="">
        <form action="" method="POST">
            <div class="Insert_form">
                <h3>Insert Data</h3>
                <input type="text" name="firstname" placeholder="Enter your firstname" required>
                <br><br>
                <input type="text" name="lastname" placeholder="Enter your lastname" required>
                <br><br>
                <input type="number" name="age" placeholder="Enter your age" required>
                <br><br>
                <button type="submit" name="save_btn" value="save">Submit</button>
                <button><a href="Display.php">Display</a></button>
            </div>
        </form>
    </div>
    <?php

    // This is for inserting data
    if (isset($_POST['save_btn'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];

        $ins = "INSERT INTO student (
    firstname,lastname,age) VALUES('$firstname', '$lastname', '$age')";

        $data = mysqli_query($con, $ins);
        // If i need js code in php then we use this things
        // Hare i use js file for when i save the data then alert is come
        if ($data) {
            ?>
            <script type="text/javascript">
                alert("Data saved successfully");
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("Please try again");
            </script>
            <?php

        }
    }




    ?>
</body>

</html>