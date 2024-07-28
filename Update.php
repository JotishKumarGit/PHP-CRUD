<?php
include ('Database.php');

$id = $_GET['id'];
$select = "SELECT * FROM student  WHERE id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);

?>

<div class="">
    <form action="" method="POST">
        <div class="Insert_form">
            <h3>Update Data</h3>
            <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>"
                placeholder="Enter your firstname">
            <br><br>
            <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" placeholder="Enter your lastname">
            <br><br>
            <input type="number" name="age" value="<?php echo $row['age'] ?>" placeholder="Enter your age">
            <br><br>
            <button type="submit" name="update_btn" value="Update">Update</button>
            <button><a href="Display.php">Back</a></button>
        </div>
        <?php
        // This is for geting data
        if (isset($_POST['update_btn'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $update = "UPDATE student SET firstname='$firstname', lastname='$lastname', age='$age' WHERE id='$id' ";
            $data = mysqli_query($con, $update);
            if ($data) {
                ?>
                <script type="text/javascript">
                    alert("Data Update successfully");
                    window.open("http://localhost/phpMachineCR/CRUD/Display.php", "_self");
                    
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    alert("Please try Again");
                </script>
                <?php
            }
        }

        ?>
    </form>
</div>